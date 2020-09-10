<?php
require "core/database/queryBuilder.php";
$userFeedback = '';
session_destroy();
if( isset($_POST['submit']) ){
    $userInputEmail = $_POST["email"];
    $userDetails =  selectUserDetails("*", "user", "email" ,$userInputEmail );
  var_dump($userDetails);
  echo "<br>";
    var_dump(password_verify($_POST['password'],$userDetails['password']));
    echo "<br>";
    var_dump($_POST['password']);
    if($userDetails && password_verify($_POST['password'],$userDetails['password'])){
        echo "!!!!!!!";
        $userInputEmail = $_POST["email"];
        $userInputPass = $_POST["password"];
        $userId = $userDetails['id'];

        session_start();

        $_SESSION['userId'] = $userId;
        $_SESSION['userEmail'] = $userInputEmail;
        $userFeedback = "Succes";
        echo "<br> Succes";
        $userInfo = selectUserDetails('*',"user_profile", "user_id" ,$userId);
        echo "<br> queri nu merge";
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
        echo "<br> Succes";
    }else{
        echo  "<br> Not Succes";
    }
}

