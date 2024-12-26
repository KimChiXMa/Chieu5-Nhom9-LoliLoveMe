<?php
session_start();
include "config.php";
include "models/db.php";
include "models/anime.php";
include "models/cate.php";
include "models/user.php";
include "../models/users.php";
$anime = new Anime;
$cate = new Cate;
$user = new Useradmin;
$userweb = new User;

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
        $anime->deleteAnime($_GET['id-anime']);
        header("location:anime-ep.php");
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
        $user->addUser($_POST['username'], $_POST['pass'], $_POST['displayname'], $_POST['email'], $_POST['avt'], $_POST['role']);
        header("location:users.php");
        break;
    case '10':
        $user->updateUser($_POST['username'], $_POST['pass'], $_POST['displayname'], $_POST['Email'], $_POST['avt'], $_POST['role'], $_GET['userid']);
        header("location:users.php");
        break;
    case '11':
        $user->deleteUser($_GET['iduser']);
        header("location:users.php");
        break;
    case '12':
        $anime->addAnime($_POST['name'], $_POST['author'], $_POST['studio'], $_POST['description'], $_POST['thumbnail'], $_POST['sotap'] ? $_POST['sotap'] : 0);
        header("location:anime.php");
        break;
    case '13':
        $loginstat = "";
        if (isset($_POST['user_name_email_login']) && isset($_POST['user_password_login'])) {
            $UserLogin = $userweb->UserLogin($_POST['user_name_email_login'], $_POST['user_password_login']);
            //var_dump($_POST['user_password_login']);
            if (count($UserLogin) > 0) {
                $loginstat = "Successfully";
                $rolecheck = $user->getUserRole($UserLogin[0]['id'])[0]['role'];
                if ($rolecheck == 0) {
                    $_SESSION["id_user_login"] = $UserLogin[0]['id'];
                    header('location:../index.php');
                } else {
                    unset($_SESSION["id_user_login"]);
                    header('location:index.php');
                }
            } else {
                // header('location:login.php');
                unset($_SESSION['username']);
                unset($_SESSION['password']);
                $loginstat = "Failed";
                header('location:../login.php?statlogin=Failed');
            }
        }
        break;
    case '14':
        try {
            if ((isset($_POST['User_SU_Email']) || isset($_POST['User_SU_Username'])) && isset($_POST['User_SU_Password'])) {
                $username = $_POST['User_SU_Username'];
                $password = $_POST['User_SU_Password'];
                $email = $_POST['User_SU_Email'];
                $UserRegister = $userweb->UserRegiser($username, $password, $email);
                //var_dump($_POST['user_password_login']);
                //var_dump($UserRegister);
                if ($UserRegister == true) {
                    header('location:../login.php');
                } else {
                    header('location:../signup.php?stat=failed');
                }
            }
        }catch(Exception $ex){
            header('location:../signup.php?stat=failed');
        }
        break;
    default:
    // Code to execute if $variable doesn't match any of the cases
}




// if (isset($_POST['txtAnime_name']) && isset($_POST['txtAuthor']) && isset($_POST['txtStudio']) && isset($_POST['content'])) {
//     $anime->updateAnime($_POST['txtAnime_name'], $_POST['txtAuthor'], $_POST['txtStudio'], $_POST['content'], "ihentai.uk", $_POST['inputsotap'], $_GET['id-anime']);
//     }
// header("location:http://localhost/Chieu5-Nhom9-LoliLoveMe/anime-main/admin/anime-ep.php?id-anime=1");
