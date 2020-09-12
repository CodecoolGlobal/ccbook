<?php
require "core/database/queryBuilder.php";

$userFeedBack = '';
if( isset($_POST['submit']) ){
    $userInputEmail = $_POST["email"];
    $userEmails = selectUserByEmail("user", "email", $userInputEmail );
    $userFeedBack = '';
    if($userEmails == false){
        $userInputEmail = $_POST["email"];
        $userInputPass = $_POST["pass"];
        $hashedPassword = password_hash($userInputPass, PASSWORD_DEFAULT);
        addUser("user", $userInputEmail, $hashedPassword );
        $userId = selectUserDetails("id","user","email",$userInputEmail);
        addUserProfile($userId['id']);
        $userFeedBack = " Succes";
    }else{
        $userFeedBack = "Not Succes";
    }


}


