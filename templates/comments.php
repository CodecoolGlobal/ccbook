<?php
require 'layout/head.php' ;
require "core/database/queryBuilder.php";

$post = getAllPostByPostId($_GET['subsection']);

var_dump($post);
//display post
echo "
<div class='card text-center'>
  <div class='card-header'>
    
  </div>
  <div class='card-body'>
    <h5 class='card-title'>{$post['message']}</h5>
    <a href='#' class='btn btn-primary'>Go to the wall</a>
</div>
  <div class='card-footer text-muted'>

</div>
</div>
";

require 'controler/getComments.php';

//add coment on route doComment

require 'layout/footer.php' ;