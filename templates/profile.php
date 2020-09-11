<?php require 'layout/head.php' ?>
<?php
require 'core/database/queryBuilder.php';

$profile= selectUserDetails("*", 'user_profile', "id", $_GET['subsection']);
if($profile['image_id']== 1){
    $profileImage = 'public/images/'.getDefaultImage()['path'];
} else {
$profileImage = 'public/images/'.getImageByProfileId($profile['id'])['path'];
}
?>
<div class="row">
    <div class="col-4">
        <div class="card" style="width: 18rem;">
            <?php
            echo '<img src="'.$profileImage.'" alt="profile-Image" width="286" height="286">'
            ?>
            <div class="card-body">
                <h3 class="card-title"><?=$profile["first_name"]." ". $profile["last_name"]?></h3>
                <h5 class="card-title">Birthdate: <?=$profile["birthdate"]?></h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Country: <?=$profile["country"]?></li>
                <li class="list-group-item">City: <?=$profile["city"]?></li>
                <li class="list-group-item">Workplace: <?=$profile["workplace"]?></li>
                <li class="list-group-item">Studies: <?=$profile["studies"]?></li>
                <li class="list-group-item">Hobbies: <?=$profile["hobby"]?></li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Friends</a>
                <?php
                    if($_SESSION['profileId'] === $_GET['subsection']){
                        echo '<a href="index.php?section=editProfile&subsection=null" class="card-link">Edit Profile</a>';
                    }
                ?>
            </div>
        </div>

    </div>
    <div class="col-6 mt-5">
        <form method="post" action="index.php?section=doPost&subsection=<?=$_GET["subsection"]?>">
            <div class="card">
                <label for="exampleFormControlTextarea1">What's on your mind?</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="1"></textarea>
                <label for="exampleFormControlFile1"></label>
                <button type="submit" class="btn btn-primary mb-2">Post</button>
            </div>
        </form>

        <div class="post">

<?php require 'controler/getPost.php';

?>
        </div>

    </div>
</div>




<?php require 'layout/footer.php' ?>
