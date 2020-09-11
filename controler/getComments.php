<?php

//require "core/database/queryBuilder.php";


$postId = $_GET['subsection'];
$comments = getAllCommentsByPostId($postId);

foreach ($comments as $comment){
    $profInfo = selectUserDetails("*", "user_profile", "id", $comment['user_profile_id']);

    echo "
        <div class='card-body' >
            <div class='card-header'>
                  By:  {$profInfo['first_name']} {$profInfo['last_name']} </div>
                <div >
                    <h5 class='card-title'> {$comment['message']}</h5>
                </div>
        </div> 
    
    ";


}
