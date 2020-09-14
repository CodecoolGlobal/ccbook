<?php
require 'layout/head.php';
require "core/database/queryBuilder.php";

$_SESSION['profileId'] = 1;
$_SESSION['userEmail'] = 'di@yahoo.com';
$userProfileID = (int)$_SESSION['profileId'];
$searchValue = $_GET['searchValue'];
$result = searchUser($userProfileID, $searchValue);

echo '<div class="pageContainer"><div class="contentWrap"><div class="container">';
foreach ($result as $profile){
    if(intval($profile['image_id']) === 1){
        $imgPath="public/images/".getDefaultImage()['path'];
    } else {
        $imgPath= "public/images/".getImageByProfileId((int)$profile['image_id'])['path'];
    }
    $isDisabled = '';
    $btnText = 'AddFriend';
    $color='btn-primary';
    $isDisabled =  $profile['status']==1 ? "disabled":'';
    switch ($profile['status']) {
        case '1':
            $isDisabled = '';
            $btnText = 'UnFriend';
            $color = 'btn-danger';
            break;
        case '2':
            $isDisabled = 'disabled';
            $btnText = 'Pending';
            $color = "btn-secondary";
            break;
        case '3':
        case '4':
            $isDisabled = '';
            $btnText = 'AddFriend';
            $color = "btn-primary";
            break;
    }

   echo '
        <div class="card mr-3" style="width: 14rem; display: inline-block">
            <img src="' . $imgPath . '" class="card-img-top" alt="" >
            <div class="card-body">
                <h5 class="card-title">'.$profile['first_name'] . ' '.$profile['last_name'] . '</h5>
                <p class="card-text">From: '.$profile['city'] . ', '.$profile['country'] . ' <br>
                                     Birthday: '.$profile['birthdate'] . '
                 </p>
                <a href="index.php?section=updateStatus&case='.$profile['status'].'&searchValue='.$_GET['searchValue'].'&id='.$profile['receiver_id'].'" name="submit" class="btn  '. $color.' '. $isDisabled .'" >'. $btnText .'</a>
            </div>
        </div>
        ';
}

echo '</div></div>';

require 'layout/footer.php';
echo '</div>';
//if(isset($_GET, $_SESSION)){
//    $userProfileID = $_SESSION['userProfileID'];
//    $searchValue = $_GET['searchValue'];
//    $result = searchUser($userProfileID, $searchValue);
//    var_dump($result);
//} elseif (isset($_GET)){
//    $userProfileID = -1;
//    $searchValue = $_GET['searchValue'];
//    $result = searchUser($userProfileID, $searchValue);
//    var_dump($result);
//}



//    var_dump($_SESSION);
//    var_dump($_GET);
//<div class="card mb-3" style="max-width: 120px;">
//                <div class="row no-gutters">
//                    <div class="col-md-4">
//                     <img src="' . $imgPath . '" class="card-img" alt="">
//                    </div>
//                    <div class="col-md-8">
//                    <div class="card-body">
//                    <h5 class="card-title">'.$profile['first_name'] . ' '.$profile['first_name'] . '</h5>
//                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
//                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
//                    </div>
//                    </div>
//                </div>
//            </div>