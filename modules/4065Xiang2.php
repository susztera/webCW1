<?php
require "../session_regulator.php";
require_once "../config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/custom.css">
    <meta charset="UTF-8">
    <title>Calculate grades</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="../index.php">GradeCalc</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                       role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        First semester
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="../modules/4059Terry1.php">4059CEM - Terry</a></li>
                        <li><a class="dropdown-item" href="../modules/4061James1.php">4061CEM - James</a></li>
                        <li><a class="dropdown-item" href="../modules/4064Xiang1.php">4064CEM - Xiang</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Second semester
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="../modules/4056Marwan2.php">4056CEM - Marwan</a></li>
                        <li><a class="dropdown-item" href="../modules/4060Antal2.php">4060CEM - Antal</a></li>
                        <li><a class="dropdown-item" href="../modules/4063Terry2.php">4063CEM - Terry</a></li>
                        <li><a class="dropdown-item" href="../modules/4065Xiang2.php">4065CEM - Xiang</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0" action="../logout.php">
                        <button class="btn btn-outline-light my-sm-0" type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-md bg-light h-100">
    <div class="container in-text">
        <h1 class="display-4">4065CEM</h1>
        <form id="formy">
            <div class="mb-3">
                <label for="CW1" class="form-label">Portfolio</label>
                <div class="input-group">
                    <input type="number" class="form-control tidy-input" id="CW1" min="0" max="100">
                    <div class="input-group-text">%</div>
                </div>
            </div>
            <div class="mb-3">
                <label for="PT" class="form-label">Phase Test</label>
                <div class="input-group">
                    <input type="number" class="form-control tidy-input" id="PT" min="0" max="100">
                    <div class="input-group-text">%</div>
                </div>
            </div>
            <button type="button" class="btn btn-outline-dark" onclick="grading()">Calculate</button>
        </form>
        <div class="alert alert-primary collapse col-md-5 mt-4" id="result">
            Sorry, something went wrong! :(
        </div>
    </div>
</div>
<script src="../js/grading.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>