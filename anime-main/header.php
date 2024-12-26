<?php
require "config.php";
require "models/db.php";
require "models/anime.php";
require "models/item.php";
require "models/anime_tag.php";
require "models/epi.php";
require "models/users.php";
require "models/tag.php";
require "models/follow.php";
require "models/review.php";


$anime = new Anime;
$animetag = new AnimeTag;
$epi = new Episode;
$user = new User;
$tag = new Tag;
$follow = new Follow;
$comment = new Comment;

//xử lý địa chỉ hình ảnh để nhúng vào web
function proceedUrl($url)
{
    $idImg = substr($url, 32, 33);
    $newUrl = "https://drive.google.com/thumbnail?id=" . $idImg . "&sz=w10000";
    return $newUrl;
}

//xử lý địa chỉ hình ảnh để nhúng vào web
function proceedComment($url)
{
    $idImg = substr($url, 32, 33);
    $newUrl = "https://drive.google.com/thumbnail?id=" . $idImg . "&sz=w100";
    return $newUrl;
}
//xử lý địa chỉ video để nhúng vào web
function proceedVideo($url)
{
    $idvid = substr($url, 0, 66);
    $newUrl = $idvid . "preview";
    return $newUrl;
}
function proceedAvarta($url)
{
    if ($url == null) {
        return "./img/simmicon.png";
    } else {
        return proceedUrl($url);
    }
}


if (isset($_SESSION["id_user_login"])) {
    $idUserCurrent = $_SESSION["id_user_login"];
} else {
    $idUserCurrent = 0;
}




?>
<!-- Header Section Begin -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <a href="./index.php">
                        <img src="img/logo.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                        <ul>

                            <li class="active"><a href="./index.php">Homepage</a></li>
                            <li><a href="./categories.php">Categories <span class="arrow_carrot-down"></span></a>
                                <ul class="dropdown">
                                    <?php
                                    $listTag = $tag->getAllTag();
                                    foreach ($listTag as $key => $valuetag): ?>
                                        <li><a href="./categories.php?idtag=<?php echo $valuetag['id_tag']; ?>"><?php echo $valuetag['name_tag']; ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>

                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li><a href="#" class="search-switch"><span class="icon_search"></span></a></li>

                        <?php if (isset($_SESSION["id_user_login"]) && $_SESSION["id_user_login"] != 0):
                            $username = $user->getUserNameById($_SESSION["id_user_login"]);
                            foreach ($username as $key => $value):
                        ?>
                                <li><a href="#"> <span class="icon_profile"></span><?php echo $value["displayname"];  ?></a>
                                <?php
                            endforeach;
                        else:
                                ?>
                                <li><a href="login.php"> <span class="icon_profile"></span></a>
                                <?php endif; ?>
                                <ul class="dropdown">
                                    <?php if (isset($_SESSION["id_user_login"]) && $_SESSION["id_user_login"] != 0): ?>
                                        <li><a href="follow-list.php">Theo dõi</a></li>
                                        <li><a href="logout.php">Đăng xuất</a></li>
                                    <?php else: ?>
                                        <li><a href="login.php">Đăng nhặp</a></li>
                                    <?php endif; ?>
                                </ul>
                                </li>
                    </ul>
                </nav>

            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header End -->