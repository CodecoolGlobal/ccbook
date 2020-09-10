<?php

require "core/database/queryBuilder.php";
$userProfileId = $_SESSION['profileId'];
$postId = $_GET['subsection'];
$message = $_POST['message'];
var_dump($message);
addComment($userProfileId, $postId,$message);

header('Location: http://localhost/ccbook/index.php?section=comments&subsection='.$postId);