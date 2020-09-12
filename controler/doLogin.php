<?php
    require "core/database/queryBuilder.php";
    $userFeedback = '';
    if (isset($_POST['submit'])) {
        $userInputEmail = $_POST["email"];
        $userDetails = selectUserDetails("*", "user", "email", $userInputEmail);
        if ($userDetails && password_verify($_POST['password'], $userDetails['password'])) {
            $userInputEmail = $_POST["email"];
            $userInputPass = $_POST["password"];
            $userId = $userDetails['id'];
            session_start();

            $_SESSION['userId'] = $userId;
            $_SESSION['userEmail'] = $userInputEmail;
            $userProfileId = getUserProfileIdByUserId($userId)['id'];
            $_SESSION['profileId'] = $userProfileId;
            $userFeedback = "Succes";
            $userInfo = selectUserDetails('*', "user_profile", "user_id", $userId);
            $counter = 0;
            foreach ($userInfo as $item) {
                if ($item == null) {
                    $counter++;
                }
            }

            if ($counter > 4) {
                header('Location: http://localhost/ccbook/index.php?section=editProfile&subsection=null');
            } else {
                header(
                    'Location: http://localhost/ccbook/index.php?section=profile&subsection='.$_SESSION['profileId']
                );
            }
        }
    }

