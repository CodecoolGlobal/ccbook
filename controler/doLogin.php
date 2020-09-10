<?php
require "core/database/queryBuilder.php";
$userFeedback = '';
if( isset($_POST['submit']) ){
    $userInputEmail = $_POST["email"];
    $userDetails =  selectUserDetails("*", "user", "email" ,$userInputEmail );
    if($userDetails && password_verify($_POST['password'],$userDetails['password'])){
        $userInputEmail = $_POST["email"];
        $userInputPass = $_POST["password"];
        $userId = $userDetails['id'];

        session_start();

        $_SESSION['userId'] = $userId;
        $_SESSION['userEmail'] = $userInputEmail;
        $userFeedback = "Succes";
        $userInfo = selectUserDetails("user_profile","*", "user_id" ,$userId);
        $counter =0;
        var_dump($_SESSION);
        foreach ($userInfo as $item){
            if($item == null){
                $counter++;
            }
        }

        if($counter > 4){
            header('Location: http://localhost/ccbook/index.php?section=edit');
        } else {
            header('Location: http://localhost/ccbook/index.php?section=profile&subsection='.$_SESSION['userId']);

        }
        var_dump($userInfo);

    }else{
        $userFeedback = "Not Succes";
    }
}
require 'templates/login.php';
