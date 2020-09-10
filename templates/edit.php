<?php
require 'core/database/queryBuilder.php';
if ($_GET['subsection'] === null) {
    $userData = getUserProfileIdByUserId($_SESSION['userid']);
    $formElement = '<form method="POST" action="index.php?section=doEdit" id="form-edit">
    <div class="form-row">
        <button id="btnFile">
        <img src="" alt="my image" width="50" height="50">
        </button>
        <div class="wrapper" style="display: none;">
        <input type="file" accept=".jpg,.jpeg,.png" name="image" id="uploadFile">
        </div>
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
            <input type="text" class="form-control" name="study" id="study" value="'.ucwords(
            strtolower($userData['studies'])
        ).'">'.
        '</div>
    </div>
    <input type="button" class="btn btn-primary" name="submitBtn" id="submitButton">
</form>
<div id="feedback"></div>
<script src="public/edit.js" defer></script>';
    echo $formElement;


} elseif ($_GET['subsection'] == 'first') {
    $formElement = '<form method="POST" action="index.php?section=doEdit" id="form-edit">
    <div class="form-row">
        <button id="btnFile">
        <img src="" alt="my image" width="50" height="50">
        </button>
        <div class="wrapper" style="display: none;">
        <input type="file" accept=".jpg,.jpeg,.png" name="image" id="uploadFile">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" name="first_name" id="firstName">
        </div>
        <div class="form-group col-md-6">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" name="last_name" id="lastName">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="country">Country</label>
            <input type="text" class="form-control" name="country" id="country">
        </div>
        <div class="form-group col-md-4">
            <label for="inputAddress2">City</label>
            <input type="text" class="form-control" name="city" id="city">
        </div>
        <div class="form-group col-md-4">
            <label for="inputCity">Birthdate</label>
            <input type="date" class="form-control" name="birthdate" id="birthdate" >
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputState">Workplace</label>
            <input type="text" class="form-control" name="workplace" id="workplace" >
        </div>
        <div class="form-group col-md-4">
            <label for="inputZip">Hobby</label>
            <input type="text" class="form-control" name="hobby" id="hobby">
        </div>
        <div class="form-group col-md-4">
            <label for="inputStudies">Studies</label>
            <input type="text" class="form-control" name="study" id="study" >
        </div>
    </div>
    <input type="button" class="btn btn-primary" name="submitBtn" id="submitButton">
</form>
<div id="feedback"></div>
<script src="public/edit.js" defer></script>';


    echo $formElement;
}