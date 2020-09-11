<?php
    require 'core/database/queryBuilder.php';
if(isset($_POST)){
    $imageId='';
    if($_FILES['image']['name'] !=''){
        $info = pathinfo($_FILES['image']['name']);
        $ext = $info['extension']; // get the extension of the file
        $imageName = "image.".date('d m Y h:i:s').'.'.$ext;
        $target = 'public/images/'.$imageName;
        move_uploaded_file( $_FILES['image']['tmp_name'], $target);
        addImage((int)$_SESSION['profileId'],$imageName);
        $imageId = getImageByProfileId($_SESSION['profileId'])['id'];
    }
    $inputs=[];
    foreach ($_POST as $key => $value){
        if($_POST[$key]){
            $inputs[$key]=$value;
        } else {
            $inputs[$key]=null;
        }
    }
    $inputs['profile_id']=intval($_SESSION['profileId']);
//        $inputs = [
//            "first_name"=>$_POST['first_name'],
//            "last_name"=>$_POST['last_name'],
//            "country"=>$_POST['country'],
//            "city"=>$_POST['city'],
//            "hobby"=>$_POST['hobby'],
//            "birthdate"=>$_POST['birthdate'],
//            "workplace"=>$_POST['workplace'],
//            "studies"=>$_POST['studies']
//        ];

    $imageId ?  $inputs['image_id'] = $imageId : $inputs['image_id'] = intval(getImageByProfileId($_SESSION['profileId'])['id']);
    updateUserProfile($inputs);
    header('Location: http://localhost:8080/ccbook/index.php?section=profile&subsection='.$_SESSION['profileId']);
} else {
    echo 'nu mergee';
}
