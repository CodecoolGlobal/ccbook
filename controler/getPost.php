<?php



$profileId = $_GET['subsection'];

$wallPostsArray = getAllPostsByUserId($profileId);
if($wallPostsArray){

foreach ($wallPostsArray as $wallPost ){

    echo  "
    <div class='card'>
  <div class='card-header'>
    By:  {$wallPost['first_name']}  {$wallPost['last_name']}
  </div>
  <div class='card-body'>
    <h5 class='card-title'>Special title treatment</h5>
    <p class='card-text'> {$wallPost['message']} </p>
    <a href='index.php?section=comments&subsection={$wallPost['id']}' class='btn btn-primary'>Go to comments</a>
    </div>
</div>
    
    
    ";

}

}