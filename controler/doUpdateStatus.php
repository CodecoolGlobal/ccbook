<?php
require 'core/database/queryBuilder.php';

    $status = $_GET['case'] == 3 || $_GET['case'] == 4 ? 2 : 4;

    updateFriendStatus($status, $_GET['id']);

//echo $status = $_GET['case'] == 3 || $_GET['case'] == 4 ? 2 : 4;
//echo $_GET['id'];
header('Location: index.php?section=search&subsection=friends&searchValue='.$_GET['searchValue']);
exit();