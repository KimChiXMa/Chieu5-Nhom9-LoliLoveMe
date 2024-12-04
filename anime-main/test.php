<?php
require "config.php";
require "models/db.php";
require "models/anime.php";
require "models/item.php";

$anime = new Anime;
$getAllAnime = $anime->getAllAnimes();
 var_dump($getAllAnime);