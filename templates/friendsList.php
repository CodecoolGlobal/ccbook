<?php require 'layout/head.php';
require 'core/database/queryBuilder.php';
$receiver_chase = getFriendRelation($_GET['subsection'], 'receiver');
$sender_chase = getFriendRelation($_GET['subsection'], 'sender');


foreach (array_merge($receiver_chase,$sender_chase) as $arr){
    {
        foreach ($arr as   $id  ){

          if( $id != $_SESSION['profileId'] ){

              $user_details = selectUserDetails( '*', 'user_profile', 'id', $id );

              echo  " <div class='card' style='width: 18rem;'>
                        <img src='...' class='card-img-top' alt='''>
                        <div class='card-body'>
                            <h5 class='card-title'> {$user_details['first_name']}  {$user_details['last_name']}</h5>
                       
                            <a href='index.php?section=profile&subsection={$user_details['id']} ' class='btn btn-primary'>Go somewhere</a>
                         </div>
                        </div>";}
        }
    }
}



?>








<?php require 'layout/footer.php' ?>