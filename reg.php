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
    $pwdhash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (email, password) VALUES (?,?)";
    if ($stmt = $link->prepare($sql)) {

        $stmt->bind_param("ss", $email, $pwdhash);
        $stmt->execute();

        header("location: login.php");
        exit;
    }
}
// Close connection
if (isset($link)) {
    mysqli_close($link);
}
?>
