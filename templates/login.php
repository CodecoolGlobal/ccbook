<?php require 'layout/head.php';

if($_SESSION['wrongInput'] === 1){
    echo "<br><p style='color: red;  text-align: center;'>Email or password wrong! Please check and try again. </p>";
}

?>

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
<div class="mt-5">
<h3 style="display: block;text-align: center">Login</h3>
<form action="index.php?section=doLogin" method="post" class="w-25 h-25 mr-auto ml-auto mt-4 border rounded p-3">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
    <div class="d-flex justify-content-center">
    <button type="submit" class="btn btn-sm btn-primary mr-auto ml-auto" name="submit">Submit</button>
    </div>
</form>
</div>
</body>
</html>
<?php require 'layout/footer.php' ?>
