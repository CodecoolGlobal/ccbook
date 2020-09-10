<?php
require "core/database/queryBuilder.php";
//session_start();
//var_dump($_SESSION);
echo '<br>';
//var_dump($_GET['subsection']);
echo '<br>';
//if(isset($_POST)){
//    var_dump($_POST);
//}

$creator_post =getUserProfileIdByUserId($_SESSION['userId'])['id']  ;

$target_post = getUserProfileIdByUserId($_GET['subsection'])['id'];

$message = $_POST['message'];
$img = 6;
//echo '<br> Insert info '.$creator_post. " ". $target_post. " ". $message." ". $img. "<br>";
addPost( $creator_post, $target_post,$message, $img);
//echo "post is in db";
header('Location: http://localhost/ccbook/index.php?section=profile&subsection='.$_GET['subsection']);