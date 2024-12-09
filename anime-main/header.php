<!-- Header Section Begin -->
 <?php
require "config.php";
require "models/db.php";
require "models/anime.php";
require "models/item.php";
require "models/anime_tag.php";
require "models/epi.php";
require "models/user.php";

$anime = new Anime;
$animetag = new AnimeTag;
$epi = new Episode;

//xử lý địa chỉ hình ảnh để nhúng vào web
    function proceedUrl($url)
    {
        $idImg = substr($url, 32, 33);
        $newUrl = "https://drive.google.com/thumbnail?id=".$idImg."&sz=w10000";
        return $newUrl;
    }


?>

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
            <div class="col-lg-8">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="./index.php">Homepage</a></li>
                            <li><a href="./categories.php">Categories <span class="arrow_carrot-down"></span></a>
                                <ul class="dropdown">
                                    <li><a href="./categories.php">romance</a></li>
                                    <li><a href="./categories.php">sci-fi</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="header__right">
                    <a href="#" class="search-switch"><span class="icon_search"></span></a>
                    <a href="./login.php"><span class="icon_profile"></span></a>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header End -->