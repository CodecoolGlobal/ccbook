<?php
require "core/database/queryBuilder.php";

$profileId = getUserProfileIdByUserId($_GET['subsection'])['id'];
$wallPostsArray = getAllPostsByUserId($profileId);

foreach ($wallPostsArray as $wallPost ){

    echo  "
    <div class='card'>
  <div class='card-header'>
    By:  {$wallPost['first_name']}  {$wallPost['last_name']}
  </div>
  <div class='card-body'>
    <h5 class='card-title'>Special title treatment</h5>
    <p class='card-text'> {$wallPost['message']} </p>
    <a href='#' class='btn btn-primary'>Go to comments</a>
    </div>
</div>
    
    
    ";

}