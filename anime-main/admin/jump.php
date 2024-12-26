<?php
include "config.php";
include "models/db.php";
include "models/anime.php";
include "models/cate.php";
include "models/user.php";
$anime = new Anime;
$cate = new Cate;
$user = new Useradmin;

switch ($_GET['select']) {
    case '1':
        $cate->deleteAnimeCateByID($_GET['id-anime']);
        $listcate = $_POST['cate'];
        foreach ($listcate as $value) {
            $cate->addAnimeCate($_GET['id-anime'], $value);
        }
        if (isset($_POST['txtAnime_name']) && isset($_POST['txtAuthor']) && isset($_POST['txtStudio']) && isset($_POST['content'])) {
            $anime->updateAnime($_POST['txtAnime_name'], $_POST['txtAuthor'], $_POST['txtStudio'], $_POST['content'], $_POST['inputthumbnail'], $_POST['inputsotap'], $_GET['id-anime']);
        }
        header("location:anime-ep.php?id-anime=" . $_GET['id-anime']);
        break;
    case '2':
        $huhu = explode("???KimChi???", $_POST['btneditlink']);
        $link = $_POST['input_link_ep'];
        $idanime = $huhu[0];
        $tentap = $huhu[1];
        $link = $anime->proceedVideo($link);
        $anime->updateEpAnime($idanime, $tentap, $link);
        header("location:anime-ep.php?id-anime=" . $idanime);
        break;
    case '3':
        $anime->deleteEpAnime($_GET['idanime'], $_GET['tentap']);
        header("location:anime-ep.php?id-anime=" . $_GET['idanime']);
        break;
    case '4':
        $anime->addEpAnime($_GET['id-anime'], $_POST['Ep'], $_POST['link']);
        header("location:anime-ep.php?id-anime=" . $_GET['id-anime']);
        break;
    case '5':
        $anime->addEpAnime($_GET['id-anime'], $_POST['Ep'], $_POST['link']);
        header("location:anime-ep.php?id-anime=" . $_GET['id-anime']);
        break;
    case '6':
        $cate->addCate($_POST['namecate']);
        header("location:categories.php");
        break;
    case '7':
        $cate->deleteCate($_GET['idcate']);
        header("location:categories.php");
        break;
    case '8':
        $cate->updateCate($_GET['cateid'], $_POST['namecate']);
        header("location:categories.php");
        break;
    case '9':
        $user->addUser($_POST['username'],$_POST['pass'],$_POST['displayname'],$_POST['email'],$_POST['avt'],$_POST['role']);
        header("location:users.php");
        break;
    case '10':

        break;
    default:
    // Code to execute if $variable doesn't match any of the cases
}




// if (isset($_POST['txtAnime_name']) && isset($_POST['txtAuthor']) && isset($_POST['txtStudio']) && isset($_POST['content'])) {
//     $anime->updateAnime($_POST['txtAnime_name'], $_POST['txtAuthor'], $_POST['txtStudio'], $_POST['content'], "ihentai.uk", $_POST['inputsotap'], $_GET['id-anime']);
//     }
// header("location:http://localhost/Chieu5-Nhom9-LoliLoveMe/anime-main/admin/anime-ep.php?id-anime=1");