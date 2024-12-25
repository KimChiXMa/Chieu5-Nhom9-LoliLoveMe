<?php
session_start();
$_SESSION["id_user_login"] = 0;
header("Location:login.php");