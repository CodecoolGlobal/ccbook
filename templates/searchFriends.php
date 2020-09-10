<?php
echo 'This is search php';
    session_start();
    $_SESSION['userID'] = 333;
    $_SESSION['userEmail'] = 'di@yahoo.com';
    var_dump($_SESSION);
    var_dump($_GET);
