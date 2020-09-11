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

    <h3 class="mt-5" style="text-align: center">Register</h3>
<div>
    <form method="post" action="index.php?section=doRegister" class="w-25 h-25 mr-auto ml-auto mt-5">
        <div>
            <div class="form-group">
                <label for="inputEmail4">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail4">
            </div>
            <br>
            <div class="form-group">
                <label for="inputPassword4">Password</label>
                <input type="password" name="pass" class="form-control" id="pass" required>
            </div>
            <div class="form-group">
                <label for="inputPassword4">Confirmation Password</label>
                <input type="password" name="confPass" onkeyup="checkPass()" class="form-control" id="confPass"
                       required>
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary" id="submit">Sign Up</button>
    </form>
</div>


<?php require 'layout/footer.php' ?>
