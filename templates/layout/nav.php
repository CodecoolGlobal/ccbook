<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <?php if (isset($_SESSION['profileId'])){
        echo
        '<a class="navbar-brand" href="http://localhost:8080/ccbook/index.php?section=profile&subsection=' . $_SESSION['profileId'].'">';
    } else {
        echo '<a class="navbar-brand" href="http://localhost:8080/ccbook/index.php">';
    } ?>
        <img src="public/images/ccbLOGO.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
    <?='</a>'?>
    <form method="get" action="index.php" class="my-2 my-lg-0d-inline-block" style="width: 8rem">
        <input type="hidden" name="section" value="search" />
        <input type="hidden" name="subsection" value="friends" />
        <input id="navSearch" class="form-control mr-sm-2 fa"
               name="searchValue" placeholder="&#xf002;    Search" aria-label="Search" style="border-radius: 45px !important;">
    </form>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <?php if(isset($_SESSION['profileId']))
            {
                echo
            '<li class="nav-item dropdown col-sm-12">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    My Profile
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Edit Profile</a>
                    <a class="dropdown-item" href="#">View Friends</a>
                    <a class="dropdown-item" href="#">View Posts</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="index.php?section=doLogout&subsection=null">Log out</a>
                </div>
            </li>';
            } else {
                if($_GET['section'] === 'login')
                {
                echo '
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active" >
                            <a class="nav-link" href="http://localhost:8080/ccbook/index.php?section=register&subsection=null">
                                Join Now</a>
                        </li>
                        </ul>
                </div>';
            } else {
                    echo '
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="btn btn-outline-primary" href="http://localhost:8080/ccbook/index.php?section=login&subsection=null">
                                    Sign in
                                </a>
                            </li>
                        </ul>
                    </div>';
                }
            }
            ?>
        </ul>

    </div>
</nav>
<?= '<body>' ?>