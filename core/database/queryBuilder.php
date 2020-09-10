<?php


    function addImage($userId, $path)
    {
        $dbh = new PDO('mysql:host=localhost;dbname=codecoolerbook', 'root', '');

        $stmt = $dbh->query("INSERT INTO image (user_id,path) VALUES({$userId},{$path})");
        $stmt->execute();
    }


    function addPost($creatorProfile, $targetProfile, $message, $imageId)
    {

        $dbh = new PDO('mysql:host=localhost;dbname=codecoolerbook', 'root', '');

        $data = [
            'name' => $creatorProfile,
            'surname' => $targetProfile,
            'sex' => $message,
            'img' => $imageId,
        ];
        $sql = "INSERT INTO post (creator_profile_id, target_profile_id, message, image_id) VALUES (:name, :surname, :sex, :img)";
        $stmt = $dbh->prepare($sql);
        $stmt->execute($data);
    }

    function getImageByUserId($userId)
    {
        $dbh = new PDO('mysql:host=localhost;dbname=codecoolerbook', 'root', '');

        $stmt = $dbh->query("SELECT * FROM image WHERE user_id={$userId})");
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $dbh = null;
        $stmt = null;

        return $result;
    }

    function selectUserDetails($column, $table, $field, $fieldValues)
    {
        $dbh = new PDO('mysql:host=localhost;dbname=codecoolerbook', 'root', '');

        $stmt = $dbh->query("SELECT {$column}  FROM {$table} WHERE {$field}='".$fieldValues."'");
//    echo "SELECT {$column}  FROM {$table} WHERE {$field}='".$fieldValues."'";
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


    return 'Check DB!';
}

function getUserProfileIdByUserId($userId){
    $dbh = new PDO('mysql:host=localhost;dbname=codecoolerbook', 'root', '');

    $stmt = $dbh->query( "SELECT id FROM user_profile WHERE user_id={$userId}");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $dbh = null;
    $stmt = null;
    return $result;
}


    function addUserProfile($id)
    {
        var_dump($id);
        $dbh = new PDO('mysql:host=localhost;dbname=codecoolerbook', 'root', '');
        $query = "INSERT INTO user_profile (user_id) VALUES ({$id})";
        var_dump($query);
        $stmt = $dbh->prepare($query);
        var_dump($stmt);
        $stmt->execute();

        return 'Check DB!';

    }

    function getAllCommentsByPostId($id){
        $dbh = new PDO('mysql:host=localhost;dbname=codecoolerbook', 'root', '');
        $stmt = $dbh->query(
            "SELECT * FROM comment WHERE post_id={$id}"
        );
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $dbh = null;
        $stmt = null;

        return $result;
    }

function getAllPostByPostId($id){
    $dbh = new PDO('mysql:host=localhost;dbname=codecoolerbook', 'root', '');
    $stmt = $dbh->query(
        "SELECT * FROM post WHERE id={$id}"
    );
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $dbh = null;
    $stmt = null;

    return $result;
}

    function getAllPostsByUserId($profileId)
    {
        $dbh = new PDO('mysql:host=localhost;dbname=codecoolerbook', 'root', '');



        $stmt = $dbh->query(
            "SELECT user_profile.last_name,user_profile.first_name ,post.id, post.message FROM user_profile INNER JOIN post ON user_profile.id = post.creator_profile_id 
    WHERE post.target_profile_id = {$profileId}"
        );
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $dbh = null;
        $stmt = null;

        return $result;
    }

    function addComment($userProfileId, $postId, $message){

        $dbh = new PDO('mysql:host=localhost;dbname=codecoolerbook', 'root', '');
        $query = "INSERT INTO comment (user_profile_id, post_id, message) VALUES ({$userProfileId},{$postId},'{$message}' )";
        $stmt = $dbh->prepare($query);
        $stmt->execute();

        return 'Check DB!';


    }
