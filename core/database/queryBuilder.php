<?php
$dbh = new PDO('mysql:host=localhost;dbname=test', 'root', '');
function selectAllusers(){
    global $dbh;

    $stmt = $dbh->query("SELECT * FROM user ");
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $dbh = null;
    $stmt = null;
    return $result;
}

function selectUserDetails($column, $table, $field, $fieldValues ){
    $dbh = new PDO('mysql:host=localhost;dbname=codecoolerbook', 'root', '');

    $stmt = $dbh->query( "SELECT {$column}  FROM {$table} WHERE {$field}='".$fieldValues."'");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $dbh = null;
    $stmt = null;
    return $result;
}



function selectUserByEmail($table, $column, $email){
    $dbh = new PDO('mysql:host=localhost;dbname=codecoolerbook', 'root', '');

    $stmt = $dbh->query( "SELECT {$column} FROM {$table} WHERE email='".$email."'");
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $dbh = null;
    $stmt = null;
    return $result;
}

function addUser($table, $email, $pass){
    $dbh = new PDO('mysql:host=localhost;dbname=codecoolerbook', 'root', '');

    $innerData = [
        'email' => $email,
        'password' => $pass
    ];

    $query = "INSERT INTO {$table} (email, password ) VALUES (:email, :password)";
    $stmt = $dbh->prepare($query);
    $stmt->execute($innerData);
    
//    $user =  selectUserByEmail('user', 'id', $email);
//
//    $userId = $user[0]['id'];
    
    // insert profile with $userId

    return 'Check DB!';
}

function addPost($creatorProfile, $targetProfile, $message, $imageId){

    $dbh = new PDO('mysql:host=localhost;dbname=codecoolerbook', 'root', '');

    $data = [
        'name' => $creatorProfile,
        'surname' => $targetProfile,
        'sex' => $message,
        'img' => $imageId
    ];
    $sql = "INSERT INTO post (creator_profile_id, target_profile_id, message, image_id) VALUES (:name, :surname, :sex, :img)";
    $stmt= $dbh->prepare($sql);
    $stmt->execute($data);
}

function getUserProfileIdByUserId($userId){
    $dbh = new PDO('mysql:host=localhost;dbname=codecoolerbook', 'root', '');

    $stmt = $dbh->query( "SELECT id FROM user_profile WHERE user_id={$userId}");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $dbh = null;
    $stmt = null;
    return $result;
}

function getAllPostsByUserId($profileId){
    $dbh = new PDO('mysql:host=localhost;dbname=codecoolerbook', 'root', '');

    $stmt = $dbh->query( "SELECT user_profile.last_name,user_profile.first_name , post.message FROM user_profile INNER JOIN post ON user_profile.id = post.creator_profile_id 
    WHERE post.target_profile_id = {$profileId}");
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $dbh = null;
    $stmt = null;
    return $result;
}
