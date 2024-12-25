<?php
session_start();
include "header.php";
$idUser = $_SESSION["id_user_login"];
$idAnime = $_GET["id"];
$type = $_GET["type"];
if($idUser = 0){
    header("Location:login.php");

}
if($type == "add"){
    $follow->eventFollow($idUser,$idAnime);
}else{
    $follow->eventUnfollow($idUser, $idAnime);
}
