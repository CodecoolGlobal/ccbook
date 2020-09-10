<?php
    require 'core/database/queryBuilder.php';
if(isset($_POST['submit'])){
    $uploadOk = 0;
    if(getimagesize($_FILES["fileToUpload"]["tmp_name"])){
        $info = pathinfo($_FILES['userFile']['name']);
        $ext = $info['extension']; // get the extension of the file
        $imageName = "image.".date('d m Y h:i:s').$ext;
        $target = 'images/'.$imageName;
        move_uploaded_file( $_FILES['userFile']['tmp_name'], $target);
        addImage($_SESSION['userId'],$imageName);
    }
        $imageId = getImageByUserId($_SESSION['userid']);
    
}
