<?php
// Include config file
require_once "config.php";
// Check if the user is already logged in, if yes then redirect
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: index.php");
    exit;
}
//if post request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    // Create query
    ///TODO secure + validate
    $sql = "INSERT INTO users (email, password) VALUES ('" . $email . "','" . password_hash($password, PASSWORD_DEFAULT) . "');";
    $result = mysqli_query($link, $sql);
    // On success
    if ($result) {
        header("location: login.php");
        exit;
    } else {
        echo mysqli_error($link);
    }
}
// Close connection
if (isset($link)) {
    mysqli_close($link);
}
?>
