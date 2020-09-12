<?php
function sanitizeProfileData($profile){
    $ignoredData = ['id','user_id','image_id','main_profile','deleted','first_name','last_name','birthdate'];
    $sanitizedData =[];
    foreach ($profile as $key => $value){
        if(!in_array($key,$ignoredData) && $profile[$key] != null){
                $sanitizedData[ucwords($key)]=ucwords($value);
        }
    }

    return $sanitizedData;

}

