<?php

//require "core/database/queryBuilder.php";


echo "<h2> Comments: </h2>";
$postId = $_GET['subsection'];
$comments = getAllCommentsByPostId($postId);

foreach ($comments as $comment){
    echo "
        <div class='card-body' >
            <div class='card-header'>
                  By:  {$comment['user_profile_id']} </div>
                <div >
                    <h5 class='card-title'> {$comment['message']}</h5>
                </div>
        </div> 
    
    ";


}
