<?php

    include 'core/Request.php';
    session_start();
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
            
            case 'search':
        switch ($subSection){
            case 'friends':
        include "templates/searchFriends.php";
        break;
            case 'other':
                include 'templates/login.php';
                break;
        }
        break;

        case 'doRegister':
            //check if POST
            if (!isset ($_POST) || count($_POST) === 0) {
                die('You can\'t access this with GET ');
            }
            include "controler/doRegister.php";
            //do register stuff
            //insert in DB and stuff
            //using $conn
            //then, redirect to login
            header('Location: index.php?section=login&subsection=null');
            break;

        case 'login':
            include "templates/login.php";

            break;

        case 'doLogin':
            include "controler/doLogin.php";
            break;

        case 'profile':
            include "templates/profile.php";
            break;
        case 'doPost':
            include "controler/doPost.php";
            break;

        case "editProfile":
            include "templates/edit.php";
            break;

        case "doEdit":
            include "controler/doEdit.php";
            break;

        default:
            include "templates/default.php";

    }



?>