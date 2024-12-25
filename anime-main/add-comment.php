<?php
session_start();
include 'header.php'; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $commentText = $_POST['comment'];
    $idAnime = $_POST['id_anime'];
    $idUserCurrent = $_SESSION[""];

    // Thêm bình luận vào cơ sở dữ liệu
    $comment = new Comment();
    $comment->addReview($idAnime, $commentText);

    // Trả về nội dung HTML của bình luận mới để thêm vào trang
    echo '<div class="anime__review__item">
            <div class="anime__review__item__pic">
                <img src="img/anime/review-1.jpg" alt="">
            </div>
            <div class="anime__review__item__text">
                <h6>Username - <span>Just now</span></h6>
                <p>' . htmlspecialchars($commentText) . '</p>
            </div>
          </div>';
}
