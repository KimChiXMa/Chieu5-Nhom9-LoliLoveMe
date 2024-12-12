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
    include 'header.php'
    ?>

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                        <a href="./categories.php">Categories</a>
                        <span>Romance</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="anime__details__content">
                <div class="row">

                    <?php
                    $getAllAnime = $anime->getAllAnimes();
                    $getTag = $animetag->getTag($_GET['id']);
                    $tag = "đang cập nhật";
                    $count = 0;
                    //tạo chuỗi tag chứa các tag của anime
                    foreach ($getTag as $key => $value) {
                        if ($count == 0) {
                            $tag = $value['name_tag'];
                            $count = 1;
                        } else {
                            $tag = $tag . " ,   " . $value['name_tag'];
                        }
                    }

                    //lặp để tìm ra anime từ id
                    foreach ($getAllAnime as $key => $value):
                        if ($_GET['id'] == $value['id']):
                    ?>
                            <div class="col-lg-4">
                                <div class="anime__details__pic set-bg" data-setbg="<?php echo proceedUrl($value['thumbnail']); ?>">
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="anime__details__text">
                                    <div class="anime__details__title">
                                        <h3><?php echo $value['name']; ?></h3>
                                    </div>
                                    <p><?php echo $value['descrip']; ?></p>
                                    <div class="anime__details__widget">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <ul>
                                                    <li><span>Studios:</span> <?php echo $value['studio']; ?></li>
                                                    <li><span>Tác giả :</span> <?php echo $value['author']; ?></li>
                                                    <li><span>Thể loại:</span><?php echo $tag; ?></li>
                                                    <li><span>Số tập:</span> <?php echo $value['so_tap']; ?></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="anime__details__btn">
                                        <a href="#" class="follow-btn"><i class="fa fa-heart-o"></i> Follow</a>
                                        <a href="anime-watching.php?id=<?php echo $_GET['id'] . "&episode=1"; ?>" class="watch-btn"><span>Watch Now</span> <i
                                                class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>

                    <?php endif;
                    endforeach; ?>


                </div>
            </div>

        </div>
    </section>
    <!-- Anime Section End -->

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
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template
                        is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                            target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>

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

</body>

</html>