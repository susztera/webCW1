<?php
// Include config file
require_once "config.php";

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
