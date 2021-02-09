<?php
session_start();
// Include config file
require_once "config.php";

// Check if the user is already logged in, if yes then redirect
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: index.php");
    exit;
}
// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    ///TODO secure and validate
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
// Prepare a select statement
    $sql = "SELECT id, password FROM users WHERE email = ?";

    if ($stmt = mysqli_prepare($link, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $email);

        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            // Store result
            mysqli_stmt_store_result($stmt);

            // Check if username exists, if yes then verify password
            if (mysqli_stmt_num_rows($stmt) == 1) {
                // Bind result variables
                mysqli_stmt_bind_result($stmt, $id, $hashed_password);
                if (mysqli_stmt_fetch($stmt)) {
                    if (password_verify($password, $hashed_password)) {
                        // Password is correct, so start a new session
                        session_start();

                        // Store data in session variables
                        $_SESSION["loggedin"] = true;
                        $_SESSION["id"] = $id;

                        // Redirect user to welcome page
                        header("location: index.php");
                    } else {
                        // Display an error message if password is not valid
                        $password_err = "The password you entered was not valid.";
                    }
                }
            } else {
                // Display an error message if username doesn't exist
                $email_err = "No account found with that email.";
            }
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }
}
// Close connection
mysqli_close($link);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/custom.css">
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="auth-body">
<main class="form-auth">
    <div class="card">
        <div class="card-body">
            <nav class="nav">
                <img src="./pics/CUEHpng.png" alt="CUEH logo" style="margin-top: 5px;width: 35px; height: 35px">
                <a class="auth-a nav-link active" aria-current="page" href="login.php"
                   style="font-size: x-large">Login</a>
            </nav>
            <form action="login.php" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-outline-light">Login</button>
            </form>
            <a class="auth-a text-decoration-none small" href="register.html" style="margin-top: 5px">Register
                instead?</a>
        </div>
    </div>
</main>
<script src="./js/bootstrap.bundle.min.js"></script>

</body>
</html>