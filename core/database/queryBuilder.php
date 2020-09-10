<?php

function selectAllusers(){
    $dbh = new PDO('mysql:host=localhost;dbname=test', 'root', '');

    $stmt = $dbh->query("SELECT * FROM user ");
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $dbh = null;
    $stmt = null;
    return $result;
}

function selectUserDetails($column, $table, $field, $fieldValues ){
    $dbh = new PDO('mysql:host=localhost;dbname=codecoolerbook', 'root', '');

    $stmt = $dbh->query( "SELECT {$column}  FROM {$table} WHERE {$field}='".$fieldValues."'");
//    echo "SELECT {$column}  FROM {$table} WHERE {$field}='".$fieldValues."'";
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $dbh = null;
    $stmt = null;
    return $result;
}



function selectUserByEmail($table, $column, $email){
    $dbh = new PDO('mysql:host=localhost;dbname=codecoolerbook', 'root', '');
//    SELECT id FROM user_profile WHERE user_id=2
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

    return 'Check DB!';

}

function getUserProfileIdByUserId($userId){
    $dbh = new PDO('mysql:host=localhost;dbname=codecoolerbook', 'root', '');
//    SELECT id FROM user_profile WHERE user_id=2
    $stmt = $dbh->query( "SELECT id FROM user_profile WHERE user_id={$userId}");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $dbh = null;
    $stmt = null;
    return $result;
}

function getAllPostsByUserId($profileId){
    $dbh = new PDO('mysql:host=localhost;dbname=codecoolerbook', 'root', '');
//    SELECT user_profile.last_name, post.message FROM user_profile INNER JOIN post ON user_profile.id = post.creator_profile_id WHERE post.target_profile_id = 2;

    $stmt = $dbh->query( "SELECT user_profile.last_name,user_profile.first_name , post.message FROM user_profile INNER JOIN post ON user_profile.id = post.creator_profile_id 
    WHERE post.target_profile_id = {$profileId}");
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $dbh = null;
    $stmt = null;
    return $result;
}
