<?php
session_start();

if (isset($_SESSION["id_user_login"]) == false) {
    header("Location:login.php");
}

include 'header.php'; 
    $commentText = $_POST['comment'];
    $idAnime = (int)$_POST['id_anime'];
    $idUser = $_SESSION["id_user_login"];

    // Thêm bình luận vào cơ sở dữ liệu
    $comment = new Comment();
    $comment->addReview($idUser,$idAnime, $commentText);

header("Location:anime-details.php?id=$idAnime");