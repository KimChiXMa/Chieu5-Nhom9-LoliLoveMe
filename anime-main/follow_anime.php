<?php
session_start();
if (isset($_SESSION["id_user_login"])== false) {
    header("Location:login.php");
}

include "header.php";
$idUser = $_SESSION["id_user_login"];
$idAnime = $_GET["id"];
$type = $_GET["type"];

if($type == "follow"){
    $follow->eventFollow($idUser,$idAnime);
}else{
    $follow->eventUnfollow($idUser, $idAnime);
}
header("Location:anime-details.php?id=$idAnime");