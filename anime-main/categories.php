<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/plyr.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <?php
    include 'header.php';

    $idTag = isset($_GET['idtag']) ? $_GET['idtag'] : 1;
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $count = 9;
    $sort = "recent add";

    $getAnimeByTag = $anime->getAnimeByTagRecentAdd($idTag, $page, $count);
    if (isset($_GET['sort'])) {
        $sort = $_GET['sort'];
        if ($sort == "a-z") {
            $getAnimeByTag = $anime->getAnimeByTagAZ($idTag, $page, $count);
        } else if ($sort == "z-a") {
            $getAnimeByTag = $anime->getAnimeByTagZA($idTag, $page, $count);
        }
    }

    $arrayTagName = $tag->getNameTag($idTag);
    foreach ($arrayTagName as $key => $value) {
        $getTagName = $value['name_tag'];
    }
    ?>


    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                        <a href="./categories.php">Categories</a>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Section Begin -->
    <section class="product-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="product__page__content">
                        <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="section-title">
                                        <h4><?php echo $getTagName; ?></h4>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="product__page__filter">
                                        <p>Order by:</p>
                                        <select id="sortSelect" onchange="handleSelectChange()">
                                            <option value="recent">Recent Add</option>
                                            <option value="a-z">A-Z</option>
                                            <option value="z-a">Z-A</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php

                            foreach ($getAnimeByTag as $keyAnime => $valueAnime): ?>

                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg" data-setbg="<?php echo proceedUrl($valueAnime['thumbnail']); ?>">
                                            <div class="ep"><?php echo $valueAnime['so_tap']; ?> tập</div>

                                        </div>

                                        <div class="product__item__text">
                                            <ul>
                                                <?php foreach ($animetag->getTag($valueAnime['id']) as $keyAnimeTag => $valueAnimeTag): ?>
                                                    <li><?php echo $valueAnimeTag['name_tag']; ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                            <h5><a href="anime-details.php?id=<?php echo $valueAnime['id']; ?>"><?php echo $valueAnime['name']; ?></a></h5>
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="product__pagination">
                        <?php
                        //   if (isset($_GET['idtag'])):

                        // hiển thị 2 sản phẩm trên 1 trang
                        //$sort = $_GET['sort'];

                        $count = 9;
                        // Lấy số trang trên thanh địa chỉ
                        // Tính tổng số anime theo thể loại, ví dụ kết quả là 18
                        $total = count($anime->getAnimeByTag($idTag));
                        // lấy đường dẫn đến file hiện hành
                        $url = $_SERVER['PHP_SELF'] . "?idtag=" . $idTag . "&sort=" . $sort;
                        echo $anime->paginateCate($url, $total, $count); ?>

                        <!-- <a href="#"><i class="fa fa-angle-double-right"></i></a> -->
                        <?php //endif; 
                        ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">


                        <div class="product__sidebar__comment">
                            <div class="section-title">
                                <h5>New Comment</h5>
                            </div>

                            <?php
                            $listAnimeNewComment = $comment->getAnimeByNewComment();
                            foreach ($listAnimeNewComment as $keyAnime => $valueAnime):

                            ?>
                                <div class="product__sidebar__comment__item">
                                    <div class="product__sidebar__comment__item__pic">
                                        <img src="<?php echo proceedComment($valueAnime['thumbnail']); ?>" alt="">
                                    </div>
                                    <div class="product__sidebar__comment__item__text">
                                        <ul>
                                            <?php foreach ($animetag->getTag($valueAnime['id']) as $keyAnimeTag => $valueAnimeTag): ?>
                                                <li><?php echo $valueAnimeTag['name_tag']; ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                        <h5><a href="anime-details.php?id=<?php echo $valueAnime['id']; ?>"><?php echo $valueAnime['name']; ?></a></h5>
                                        <span>Review : <?php echo $valueAnime['comment']; ?></span>
                                    </div>
                                </div>

                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="page-up">
            <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer__logo">
                        <a href="./index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer__nav">
                        <ul>
                            <li class="active"><a href="./index.php">Homepage</a></li>
                            <li><a href="./categories.php">Categories</a></li>
                            <li><a href="./blog.php">Our Blog</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form" action="result.php" method="get">
                <input name="search" type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/player.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        function handleSelectChange() {
            const selectElement = document.getElementById('sortSelect');
            const typeSort = selectElement.value;
            const url = "<?php echo $_SERVER['PHP_SELF'] . "?idtag=" . $idTag; ?>"
            const newUrl = `${url}&sort=${typeSort}`;
            window.location.href = newUrl;
        }
    </script>
</body>

</html>