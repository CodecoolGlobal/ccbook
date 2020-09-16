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
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <link rel="stylesheet" href="public/frontPageStyle.css">
    <link rel="stylesheet" href="public/footer.css">
    <title>CodeCoolerBook</title>

</head>
<body>
<div class="pageContainer">
    <div class="contentWrap">
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


<section id="showcase">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="showcase-left">
                    <img src="public/images/1.jpg">
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="showcase-right">
                    <h1>Join Our Comunity</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <br>
                <a class="btn btn-default btn-lg showcase-btn">Read More</a>
            </div>
        </div>
    </div>
</section>

<section id="testimonial">
    <div class="container">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit suscipit, perspiciatis earum non culpa minus labore. Dolore quae saepe aperiam nam iste sapiente minima tenetur necessitatibus, repudiandae recusandae, sequi sed!</p>
        <p class="customer">- John Doe</p>
    </div>
</section>

<section id="info1">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="info-left">
                    <img src="public/images/2.jpg">
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="info-right">
                    <h2>Get To Know Your Mates Better</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore quos praesentium voluptate, voluptas illum quasi aliquid harum possimus earum vel, enim distinctio tenetur excepturi. Aliquid totam assumenda minus quis dicta!</p>
                    <br>
                    <a class="btn btn-default btn-lg">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
<section id="info2">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="info-left">
                    <h2>Info Block One</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore quos praesentium voluptate, voluptas illum quasi aliquid harum possimus earum vel, enim distinctio tenetur excepturi. Aliquid totam assumenda minus quis dicta!</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="info-right">
                    <h2>Info Block Two</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore quos praesentium voluptate, voluptas illum quasi aliquid harum possimus earum vel, enim distinctio tenetur excepturi. Aliquid totam assumenda minus quis dicta!</p>
                </div>
            </div>
        </div>
    </div>
</section>

</div>
<?php require 'layout/footer.php' ?>
</div>
</body>

<script>
    window.sr = ScrollReveal();
    sr.reveal('.navbar', {
        duration: 2000,
        origin:'bottom'
    });
    sr.reveal('.showcase-left', {
        duration: 2000,
        origin:'top',
        distance:'300px'
    });
    sr.reveal('.showcase-right', {
        duration: 2000,
        origin:'right',
        distance:'300px'
    });
    sr.reveal('.showcase-btn', {
        duration: 2000,
        delay: 2000,
        origin:'bottom',
        distance:'300px'
    });
    sr.reveal('#testimonial div', {
        duration: 2000,
        origin:'bottom'
    });
    sr.reveal('.info-left', {
        duration: 2000,
        origin:'left',
        distance:'300px',
        viewFactor: 0.2
    });
    sr.reveal('.info-right', {
        duration: 2000,
        origin:'left',
        distance:'300px',
        viewFactor: 0.2
    });
</script>

<script>
    $(function() {
        //Smooth Scrolling
        $('a[href*="#"]:not([href="#"])').click(function() {
            if(location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') &&
                location.hostname === this.hostname) {
                let target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
</script>
