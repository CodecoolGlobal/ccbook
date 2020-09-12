<?php

require "core/database/queryBuilder.php";
$userProfileId = $_SESSION['profileId'];
$postId = $_GET['subsection'];
$message = $_POST['message'];
addComment($userProfileId, $postId,$message);

header('Location: http://localhost:8080/ccbook/index.php?section=comments&subsection='.$postId);