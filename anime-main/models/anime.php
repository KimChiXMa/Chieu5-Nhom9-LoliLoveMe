<?php
class Anime extends Db
{
    public function getAllAnimes()
    {
        $sql = self::$connection->prepare("SELECT * FROM anime");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }

    //lấy anime theo tag
    public function getAnimeByTag($idTag)
    {
        $sql = self::$connection->prepare("SELECT *,tag.name_tag 
                                        FROM anime,anime_tag,tag 
                                        WHERE anime_tag.id_tag = ? AND anime.id = anime_tag.id_anime AND tag.id_tag = anime_tag.id_tag;");
        $sql->bind_param("i", $idTag);
        $sql->execute();
        $animes = array();
        $animes = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $animes;
    }

    public function getAnimeByTagAZ($idTag)
    {
        $sql = self::$connection->prepare("SELECT *,tag.name_tag 
        FROM anime,anime_tag,tag 
        WHERE anime_tag.id_tag = ? AND anime.id = anime_tag.id_anime AND tag.id_tag = anime_tag.id_tag 
        ORDER BY anime.name ASC;");
        $sql->bind_param("i", $idTag);
        $sql->execute();
        $animes = array();
        $animes = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $animes;
    }

    public function getAnimeByTagZA($idTag)
    {
        $sql = self::$connection->prepare("SELECT *,tag.name_tag 
        FROM anime,anime_tag,tag 
        WHERE anime_tag.id_tag = ? AND anime.id = anime_tag.id_anime AND tag.id_tag = anime_tag.id_tag 
        ORDER BY anime.name DESC;");
        $sql->bind_param("i", $idTag);
        $sql->execute();
        $animes = array();
        $animes = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $animes;
    }
    public function paginateTag($url, $total, $count)
    {
        $totalLinks = ceil($total / $count);
        $link = "";
        for ($j = 1; $j <= $totalLinks; $j++) {
            $link = $link . "<a class='btn btn-sm btn-outline-secondary m-1' href='$url&page=$j'> $j </a>";
        }
        return $link;
    }
    public function getAnime($page, $count)
    {
        // Tính số thứ tự trang bắt đầu 
        $start = ($page - 1) * $count;
        $sql = self::$connection->prepare("SELECT * FROM `anime`ORDER BY `id` DESC LIMIT ?,?");
        $sql->bind_param("ii", $start, $count);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function getAnimeById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `anime` ORDER BY `id` LIMIT ?;");
        $sql->bind_param("i",$id);
        $sql->execute();//thuc thi 
        $items = array();//tra ve du lieu
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }

}
