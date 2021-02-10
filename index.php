<?php
require "session_regulator.php";
require_once "config.php";
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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">GradeCalc</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        First semester
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="./modules/4059Terry1.php">4059CEM - Terry</a></li>
                        <li><a class="dropdown-item" href="./modules/4061James1.php">4061CEM - James</a></li>
                        <li><a class="dropdown-item" href="./modules/4064Xiang1.php">4064CEM - Xiang</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Second semester
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="./modules/4060Antal2.php">4060CEM - Antal</a></li>
                        <li><a class="dropdown-item" href="./modules/4062James2.php">4062CEM - James</a></li>
                        <li><a class="dropdown-item" href="./modules/4063Terry2.php">4063CEM - Terry</a></li>
                        <li><a class="dropdown-item" href="./modules/4065Xiang2.php">4065CEM - Xiang</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0" action="logout.php">
                        <button class="btn btn-outline-light my-sm-0" type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-md bg-light">
    <div class="container">
        <div class="row text-center">
            <div class="col ">
                <h1 class="display-1">WELCOME!</h1>
                <img src="pics/SirCalcy.png" class="img-fluid">
            </div>
        </div>
        <div class="in-text">
            <h3>
                This is a webiste made to help you calculate your first year grades.
            </h3>
            <p>That's right! The university has some very troublesome ways of determining student performance.
                But no need to fear; GradeCalc is here!
                Gone are the days of having to hunt down how each of your grades would
                weigh in your final grade for a particular course. Now with GradeCalc, you can easily
                and effortlessly calculate how you measure in our grading system. Use the menu above to
                see your average grades in each course and lift the <i>weight</i> of having to worry about
                those pesky weighted courseworks right off your shoulders!
            </p>
            <p>
                All you need to do is calculate your grades in each module, then come back here to the home page to
                calculate your final result!
            </p>
            <h3>
                First semester
            </h3>
            <form>
                <div class="mb-3">
                    <label for="4059CEM" class="form-label">4059CEM</label>
                    <div class="input-group">
                        <input type="number" class="form-control tidy-input" id="4059CEM" min="0" max="100">
                        <div class="input-group-text">%</div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="4061CEM" class="form-label">4061CEM</label>
                    <div class="input-group">
                        <input type="number" class="form-control tidy-input" id="4061CEM" min="0" max="100">
                        <div class="input-group-text">%</div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="4064CEM" class="form-label">4064CEM</label>
                    <div class="input-group">
                        <input type="number" class="form-control tidy-input" id="4064CEM" min="0" max="100">
                        <div class="input-group-text">%</div>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-dark">Calculate</button>
            </form>
            <h3>
                Second semester
            </h3>
            <form>
                <div class="mb-3">
                    <label for="4060CEM" class="form-label">4060CEM</label>
                    <div class="input-group">
                        <input type="number" class="form-control tidy-input" id="4060CEM" min="0" max="100">
                        <div class="input-group-text">%</div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="4062CEM" class="form-label">4062CEM</label>
                    <div class="input-group">
                        <input type="number" class="form-control tidy-input" id="4062CEM" min="0" max="100">
                        <div class="input-group-text">%</div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="4063CEM" class="form-label">4063CEM</label>
                    <div class="input-group">
                        <input type="number" class="form-control tidy-input" id="4063CEM" min="0" max="100">
                        <div class="input-group-text">%</div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="4065CEM" class="form-label">4065CEM</label>
                    <div class="input-group">
                        <input type="number" class="form-control tidy-input" id="4065CEM" min="0" max="100">
                        <div class="input-group-text">%</div>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-dark">Calculate</button>
            </form>
        </div>
    </div>
</div>
<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>