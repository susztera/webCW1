<?php
require "session_regulator.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/custom.css">
    <meta charset="UTF-8">
    <title>Calculate grades</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        First year
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">4059CEM - Terry</a></li>
                        <li><a class="dropdown-item" href="#">4061CEM - James</a></li>
                        <li><a class="dropdown-item" href="#">4064CEM - Xiang</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Second year
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">4060CEM - Antal</a></li>
                        <li><a class="dropdown-item" href="#">4062CEM - James</a></li>
                        <li><a class="dropdown-item" href="#">4063CEM - Terry</a></li>
                        <li><a class="dropdown-item" href="#">4065CEM - Xiang</a></li>
                    </ul>
                </li>
        </div>
    </div>
</nav>
<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>