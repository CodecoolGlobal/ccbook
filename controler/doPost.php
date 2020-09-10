<?php
require 'core/database/queryBuilder.php';
$creator_post = getUserProfileIdByUserId($_SESSION['userId'])['id'];

$target_post = getUserProfileIdByUserId($_GET['subsection'])['id'];

$message = $_POST['message'];
$img = 6;
addPost($creator_post, $target_post, $message, $img);
header('Location: http://localhost/ccbook/index.php?section=profile&subsection='.$_GET['subsection']);