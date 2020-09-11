<?php
require 'layout/head.php' ;
require "core/database/queryBuilder.php";

$post = getAllPostByPostId($_GET['subsection']);


//display post
echo "
<div class='card text-center'>
  <div class='card-header'>
    
  </div>
  <div class='card-body'>
  <div class='card-header'>
    Post:
  </div>
    <h5 class='card-title'>{$post['message']}</h5>
    <a href='index.php?section=profile&subsection={$post['target_profile_id']}' class='btn btn-primary'>Go to the wall</a>
</div>
  <div class='card-footer text-muted'>

</div>
</div>
";

// see the comments
require 'controler/getComments.php';

//add comment on route doComment
echo "
<h3> Add new comment! </h3>
    <div class='card-body'>
    <form method='post' action='index.php?section=doComment&subsection={$post['id']}'>
            <div class='card'>
                <label for='exampleFormControlTextarea1'>What's on your mind?</label>
                <textarea class='form-control' id='exampleFormControlTextarea1' name='message' rows='1'></textarea>
                <label for='exampleFormControlFile1'></label>
                <input type='file' class='form-control-file' id='exampleFormControlFile1'>
                <button type='submit' class='btn btn-primary mb-2'>Add Comment</button>
            </div>
        </form></div>
        
";


require 'layout/footer.php' ;