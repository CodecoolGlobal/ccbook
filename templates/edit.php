<?php
    require 'core/database/queryBuilder.php';
    require 'layout/head.php' ;
    $userData = selectUserDetails("*", "user_profile", "id", $_SESSION['profileId']);
    if ($userData['image_id'] != 1) {
        $imagePath = getImageByProfileId($_SESSION['profileId'])['path'];
    } else {
        $imagePath = getDefaultImage()['path'];
    }
    $fullPath = 'public/images/'.$imagePath;
    $formElement = '<div class="container justify-content-center w-50 h-50 mt-5"><form enctype="multipart/form-data" method="POST" action="index.php?section=doEdit"  id="form-edit">
    <div class="form-row">
    <button id="btnFile" type="button" class="mb-2" style="border: none;margin: 0;padding: 0;background-color:transparent;">
        <img src="'.$fullPath.'" alt="my image" width="200" height="200" class="float-left">
        </button>
        <div class="wrapper" style="display: none;"> <input type="file" accept="image/jpg,image/jpeg,image/png" name="image" id="uploadFile"></div>
       
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" name="first_name" id="firstName" value="'.ucwords(
            strtolower($userData['first_name'])
        ).'">'.
        '</div>
        <div class="form-group col-md-6">
            <label for="lastName">Last Name</label>
             <input type="text" class="form-control" name="last_name" id="lastName" value="'.ucwords(
            strtolower($userData['last_name'])
        ).'">'.
        '</div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="country">Country</label>
            <input type="text" class="form-control" name="country" id="country" value="'.ucwords(
            strtolower($userData['country'])
        ).'">'.
        '</div>

        <div class="form-group col-md-4">
            <label for="inputAddress2">City</label>
            <input type="text" class="form-control" name="city" id="city" value="'.ucwords(
            strtolower($userData['city'])
        ).'">'.
        '</div>
        <div class="form-group col-md-4">
            <label for="inputCity">Birthdate</label>
            <input type="date" class="form-control" name="birthdate" id="birthdate" value="'.ucwords(
            strtolower($userData['birthdate'])
        ).'">'.
        '</div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputState">Workplace</label>
            <input type="text" class="form-control" name="workplace" id="workplace" value="'.ucwords(
            strtolower($userData['workplace'])
        ).'">'.
        '</div>
        <div class="form-group col-md-4">
            <label for="inputZip">Hobby</label>
            <input type="text" class="form-control" name="hobby" id="hobby" value="'.ucwords(
            strtolower($userData['hobby'])
        ).'">'.
        '</div>
        <div class="form-group col-md-4">
            <label for="inputStudies">Studies</label>
            <input type="text" class="form-control" name="studies" id="study" value="'.ucwords(
            strtolower($userData['studies'])
        ).'">'.
        '</div>
    </div>
    <button type="button" class="btn btn-sm btn-primary" name="submitBtn" id="submitButton">Submit</button>
</form>
<div id="feedback"></div>
<script src="public/edit.js" defer></script>
</div>
';
    echo $formElement.'<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>';


