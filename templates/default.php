<!DOCTYPE html>
<html lang="en-us">
<head>
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;800&display=swap" rel="stylesheet">

    <!-- Custom made -->
    <script rel="script" src="public/statics.js"></script>
    <link rel="stylesheet" href="public/frontPageStyle.css">
    <link rel="stylesheet" href="public/footer.css">
    <title>CodeCoolerBook</title>

</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand " href="#">
        <img src="public/images/ccbLOGO.png" width="50" height="50" class="d-inline-block align-top" alt="" loading="lazy">
            <span id="navBrandText">CodeCoolBook</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item active" >
                <a class="nav-link" href="http://localhost:8080/ccbook/index.php?section=register&subsection=null">
                    Join Now</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-outline-primary" href="http://localhost:8080/ccbook/index.php?section=login&subsection=null">
                    Sign in
                </a>
            </li>
        </ul>
    </div>
</nav>

<body>



<?php require 'layout/footer.php' ?>