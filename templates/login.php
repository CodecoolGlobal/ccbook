<?php //require 'layout/head.php' ?>
<!---->
<!--<form action="index.php?section=doRegister" method="POST">-->
<!--    <h1> LOGIN </h1>-->
<?php
//require "core/database/queryBuilder.php";
//$response = selectAllusers();
//var_dump($response);
//?>
<!--    -->
<!--</form>-->
<!---->
<?php //require 'layout/footer.php' ?>
<?php require 'layout/head.php' ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3 class="mt-5" style="text-align: center">Login</h3>
<div>
<form action="index.php?section=doLogin" method="post" class="w-25 h-25 mr-auto ml-auto mt-5">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary mr-auto ml-auto" name="submit">Submit</button>
</form>
</div>
</body>
</html>
<?php require 'layout/footer.php' ?>
