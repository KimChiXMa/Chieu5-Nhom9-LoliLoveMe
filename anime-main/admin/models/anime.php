<?php
class Anime extends Db
{
    public function getAllAnime()
    {
        $sql = self::$connection->prepare("SELECT * FROM `anime`");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function getAnimeByID($idanime)
    {
        $sql = self::$connection->prepare("SELECT * FROM `anime` WHERE `id` = ?");
        $sql->bind_param("i",$idanime);
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function getAllEpOfAnime($id_anime)
    {
        $sql = self::$connection->prepare("SELECT `episode`.*, `anime`.`name` FROM `episode`,`anime` WHERE anime.id = episode.id_anime AND episode.id_anime = ? ORDER BY tentap ASC");
        $sql->bind_param("i",$id_anime);
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function search($keyword, $start, $count)
    {
        $sql = self::$connection->prepare("SELECT * FROM `items` 
        WHERE `content` LIKE ?
        LIMIT ?,?");
        $keyword = "%$keyword%";
        $sql->bind_param("sii", $keyword, $start, $count);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function searchCount($keyword)
    {
        $sql = self::$connection->prepare("SELECT * FROM `items` 
        WHERE `content` LIKE ?");
        $keyword = "%$keyword%";
        $sql->bind_param("s", $keyword);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }



    function paginate($url, $total, $count)
    {
        $totalLinks = ceil($total / $count);
        $link = "";
        for ($j = 1; $j <= $totalLinks; $j++) {
            $link = $link . "<a class='btn btn-sm btn-outline-secondary m-1' href='$url&page=$j'> $j </a>";
        }
        return $link;
    }
    //xử lý địa chỉ hình ảnh để nhúng vào web
function proceedImg($url)
{
    $idImg = substr($url, 32, 33);
    $newUrl = "https://drive.google.com/thumbnail?id=" . $idImg . "&sz=w10000";
    return $newUrl;
}
//xử lý địa chỉ video để nhúng vào web
function proceedVideo($url){
    $idvid = substr($url,0, 66);
    $newUrl = $idvid . "preview";
    return $newUrl;
}
}
