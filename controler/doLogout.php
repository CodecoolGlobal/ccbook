<?php

$_SESSION['userId'] = '';
$_SESSION['userEmail'] = '';
$_SESSION['profileId'] = '';
session_unset();
header('Location: http://localhost:8080/ccbook/index.php');
