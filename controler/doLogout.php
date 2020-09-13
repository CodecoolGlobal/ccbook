<?php

$_SESSION['userEmail'] = '';
header('Location: http://localhost:8080/ccbook/index.php');
session_unset();