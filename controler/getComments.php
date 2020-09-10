<?php

//require "core/database/queryBuilder.php";


echo "<h1> Comments: </h1>";
$postId = $_GET['subsection'];
$comments = getAllCommentsByPostId($postId);

foreach ($comments as $comment){
    echo "
        <div class='card'>
  <div class='card-header'>
    By:  {$comment['user_profile_id']}  
  </div>
  <div class='card-body'>
    <h5 class='card-title'> {$comment['message']}</h5>
   
    </div>
</div>
    
    ";


}
