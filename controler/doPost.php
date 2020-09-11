<?php
require 'core/database/queryBuilder.php';
$creator_post = $_SESSION['profileId'];

$target_post = $_GET['subsection'];

$message = $_POST['message'];
$img = 6;
addPost($creator_post, $target_post, $message, $img);
header('Location: http://localhost:8080/ccbook/index.php?section=profile&subsection='.$_GET['subsection']);