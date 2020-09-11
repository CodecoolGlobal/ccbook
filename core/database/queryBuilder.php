<?php


    function addImage($profileId, $path)
    {
        $image = getImageByProfileId($_SESSION['profileId']);
        var_dump($profileId, $path);
        if ($image) {
            $dbh = new PDO('mysql:host=localhost;dbname=codecoolerbook', 'root', '');
            $stmt = $dbh->query("UPDATE image SET path='{$path}' WHERE user_profile_id={$profileId}");
            var_dump('este pe update');
            $stmt->execute();
        } else {
            $dbh = new PDO('mysql:host=localhost;dbname=codecoolerbook', 'root', '');
            $stmt = $dbh->prepare("INSERT INTO image (user_profile_id,path) VALUES(:profileId,:path)");
            $stmt->bindParam(':profileId', $profileId, PDO::PARAM_INT);
            $stmt->bindParam(':path', $path, PDO::PARAM_STR);
            var_dump('este pe insert');

            $stmt->execute();
        }

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

    function getImageByProfileId($profileId)
    {
        $dbh = new PDO('mysql:host=localhost;dbname=codecoolerbook', 'root', '');

        $stmt = $dbh->query("SELECT * FROM image WHERE user_profile_id={$profileId}");
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $dbh = null;
        $stmt = null;

        return $result;
    }

    function getDefaultImage()
    {
        $dbh = new PDO('mysql:host=localhost;dbname=codecoolerbook', 'root', '');

        $stmt = $dbh->query("SELECT * FROM image WHERE id=1");

        return $stmt->fetch(PDO::FETCH_ASSOC);
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


    function selectUserByEmail($table, $column, $email)
    {
        $dbh = new PDO('mysql:host=localhost;dbname=codecoolerbook', 'root', '');

        $stmt = $dbh->query("SELECT {$column} FROM {$table} WHERE email='".$email."'");
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $dbh = null;
        $stmt = null;

        return $result;
    }

    function addUser($table, $email, $pass)
    {
        $dbh = new PDO('mysql:host=localhost;dbname=codecoolerbook', 'root', '');

        $innerData = [
            'email' => $email,
            'password' => $pass,
        ];

        $query = "INSERT INTO {$table} (email, password ) VALUES (:email, :password)";
        $stmt = $dbh->prepare($query);
        $stmt->execute($innerData);


        return 'Check DB!';
    }

    function getUserProfileIdByUserId($userId)
    {
        $dbh = new PDO('mysql:host=localhost;dbname=codecoolerbook', 'root', '');

        $stmt = $dbh->query("SELECT id FROM user_profile WHERE user_id={$userId}");
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

    function getAllCommentsByPostId($id)
    {
        $dbh = new PDO('mysql:host=localhost;dbname=codecoolerbook', 'root', '');
        $stmt = $dbh->query(
            "SELECT * FROM comment WHERE post_id={$id}"
        );
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $dbh = null;
        $stmt = null;

        return $result;
    }

    function getAllPostByPostId($id)
    {
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


    function updateUserProfile($inputs)
    {
        $dbh = new PDO('mysql:host=localhost;dbname=codecoolerbook', 'root', '');
        $data = [
            ":firstName" => $inputs['first_name'],
            ":lastName" => $inputs['last_name'],
            ":country" => $inputs['country'],
            ":city" => $inputs['city'],
            ":imageId" => $inputs['image_id'],
            ":hobby" => $inputs['hobby'],
            ":birthdate" => $inputs['birthdate'],
            ":workplace" => $inputs['workplace'],
            ":studies" => $inputs['studies'],
            ":profileId" => intval($inputs['profile_id']),
        ];

        $query = "UPDATE user_profile SET first_name=:firstName, last_name=:lastName, country=:country , city=:city, image_id=:imageId , hobby=:hobby , birthdate=:birthdate, workplace=:workplace, studies=:studies WHERE id=:profileId";
        $stmt = $dbh->prepare($query);
        var_dump($stmt);

        $stmt->execute($data);
    }

    function addComment($userProfileId, $postId, $message)
    {

        $dbh = new PDO('mysql:host=localhost;dbname=codecoolerbook', 'root', '');
        $query = "INSERT INTO comment (user_profile_id, post_id, message) VALUES ({$userProfileId},{$postId},'{$message}' )";
        $stmt = $dbh->prepare($query);
        $stmt->execute();

        return 'Check DB!';


    }
