<?php

include 'core/Request.php';

$request = new Request();

$section = $request->get('section');
$subSection = $request->get('subsection');

//create a file that holds a db connection
//like, core/db.php in which you create a new conn 
//and assign it to a variable called $conn


switch ($section) {
    case 'register':
            include "templates/register.php";
    break;

    case 'doRegister':
        //check if POST
        if ( ! isset ( $_POST ) || count($_POST) === 0 ) {
            die('You can\'t access this with GET ');
        }

        //do register stuff
        //insert in DB and stuff
        //using $conn
        //then, redirect to login

        header('Location: index.php?section=login');
        exit(0);
    break;

    case 'login':
        include "templates/login.php";

    break;

    case 'doLogin':
        include "controler/doLogin.php";
    break;

    case 'profile':
        echo "This is profile";

    break;

    case "edit":
        echo "This is edit";
    break;
    default:
        include "templates/default.php";
    // break
}




?>