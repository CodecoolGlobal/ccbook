<?php
require 'layout/head.php' ;
require "core/database/queryBuilder.php";

$post = getAllPostByPostId($_GET['subsection']);
$creatorName = selectUserDetails("*","user_profile","id",$post['creator_profile_id']);

//display post
echo "<div class='pageContainer'><div class='contentWrap'>";
echo "
<div class='card text-center'>
  <div class='card-header'>
  </div>
  <div class='card-body'>
    <h5 class='card-title'>{$post['message']}</h5>
    <a href='index.php?section=profile&subsection={$post['target_profile_id']}' class='btn btn-primary'>Go to the wall</a>
</div>
  <div class='card-footer text-muted justify-content-end'>
  <p class='w-25 h-25 ml-auto p-0'>
    created by {$creatorName['first_name']}  {$creatorName['last_name']}
    </p>
</div>
</div>
";

// see the comments
require 'controler/getComments.php';

//add comment on route doComment
echo "
    <div class='card-body w-50 h-50 ml-auto mr-auto'>
    <form method='post' action='index.php?section=doComment&subsection={$post['id']}'>
            <div class='card'>
                <label for='exampleFormControlTextarea1'>What's on your mind?</label>
                <textarea class='form-control' id='exampleFormControlTextarea1' name='message' rows='1'></textarea>
                <button type='submit' class='btn btn-primary mb-2 w-25 h-25 ml-auto mr-auto'>Add Comment</button>
            </div>
        </form></div>
        
";
echo "</div>";

require 'layout/footer.php' ;

echo "</div>";