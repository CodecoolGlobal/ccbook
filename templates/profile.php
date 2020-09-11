<?php require 'layout/head.php' ?>
<?php
require 'core/database/queryBuilder.php';

$profile= selectUserDetails("*", 'user_profile', "id", $_GET['subsection']);

?>
<div class="row">
    <div class="col-4">
        <div class="card" style="width: 18rem;">
            <img src="https://techcentereurope.com/panel/assets/upload/default/default-profile.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$profile["first_name"]." ". $profile["last_name"]?></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>

    </div>
    <div class="col-8">
        <h1> Add new post! </h1>
        <form method="post" action="index.php?section=doPost&subsection=<?=$_GET["subsection"]?>">
            <div class="card">
                <label for="exampleFormControlTextarea1">What's on your mind?</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="1"></textarea>
                <label for="exampleFormControlFile1"></label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                <button type="submit" class="btn btn-primary mb-2">Post</button>
            </div>
        </form>

        <h1>  See the posts.  </h1>
        <div class="post">

<?php require 'controler/getPost.php';

?>
        </div>

    </div>
</div>




<?php require 'layout/footer.php' ?>
