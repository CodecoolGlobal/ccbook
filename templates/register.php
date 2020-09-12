<?php //require 'layout/head.php' ?>
<!---->
<!--<form action="index.php?section=doRegister" method="POST">-->
<!--    <h1> REGISTER </h1>-->
<!---->
<!--    <input type="text" name="email" placeholder="email" />-->
<!---->
<!--    <input type="submit" value="Register" /> -->
<!--</form>-->
<!---->
<?php //require 'layout/footer.php' ?>

<?php require 'layout/head.php' ?>

<div class="mt-5">
    <h3 style="text-align: center;display: block">Register</h3>
    <form method="post" action="index.php?section=doRegister" class="w-25 h-25 mr-auto ml-auto mt-4 border rounded p-3">
        <div>
            <div class="form-group">
                <label for="inputEmail4">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="ex: john@email.com">
            </div>
            <br>
            <div class="form-group">
                <label for="inputPassword4">Password</label>
                <input type="password" name="pass" class="form-control" id="pass" required placeholder="choose a password">
            </div>
            <div class="form-group">
                <label for="inputPassword4">Confirmation Password</label>
                <input type="password" name="confPass" onkeyup="checkPass()" class="form-control" id="confPass" placeholder="confirm your password"
                       required>
            </div>
        </div>
        <div class="d-flex justify-content-center">
        <button type="submit" name="submit" class="btn btn-sm btn-primary" id="submit">Sign Up</button>
        </div>
    </form>
</div>


<?php require 'layout/footer.php' ?>
