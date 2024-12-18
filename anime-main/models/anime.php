<?php
class Anime extends Db
{
    public function getAllAnimes()
    {
        $sql = self::$connection->prepare("SELECT * FROM `anime`");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    // public function getAnimeByID($idanime)
    // {
    //     $sql = self::$connection->prepare("SELECT * FROM `anime` WHERE `id` = ?");
    //     $sql->bind_param("i",$idanime);
    //     $sql->execute();
    //     $item = array();
    //     $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    //     return $item;
    // }
    public function getAllEpOfAnime($id_anime)
    {
        $sql = self::$connection->prepare("SELECT `episode`.* FROM `episode`,`anime` WHERE anime.id = episode.id_anime AND episode.id_anime = ? ORDER BY tentap ASC");
        $sql = self::$connection->prepare("SELECT `episode`.*, `anime`.`name` FROM `episode`,`anime` WHERE anime.id = episode.id_anime AND episode.id_anime = ? ORDER BY tentap ASC");
        $sql->bind_param("i", $id_anime);
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



    //Hàm in paginate theo cate Hy
    function paginateCate($url, $total, $count)
    {
        $totalLinks = ceil($total / $count);
        $link = "";
        for ($j = 1; $j <= $totalLinks; $j++) {
            $link = $link . "<a href='$url&page=$j'> $j</a>";
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
    function proceedVideo($url)
    {
        $idvid = substr($url, 0, 66);
        $newUrl = $idvid . "preview";
        return $newUrl;
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

    public function getAnimeByTagZA($idTag, $page, $count)
    {
        $start = ($page - 1) * $count;
        $sql = self::$connection->prepare("SELECT *,tag.name_tag 
        FROM anime,anime_tag,tag 
        WHERE anime_tag.id_tag = ? AND anime.id = anime_tag.id_anime AND tag.id_tag = anime_tag.id_tag 
        ORDER BY anime.name DESC
        LIMIT ?,? ;");
        $sql->bind_param("iii", $idTag, $start, $count);
        $sql->execute();
        $animes = array();
        $animes = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $animes;
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
        $sql = self::$connection->prepare("SELECT * FROM `anime` ORDER BY `id` DESC  LIMIT ?;");
        $sql->bind_param("i", $id);
        $sql->execute();//thuc thi 
        $items = array();//tra ve du lieu
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    function paginateAnime($url, $total, $count)
    {
        $totalLinks = ceil($total / $count);
        $link = "";
        for ($j = 1; $j <= $totalLinks; $j++) {
            $link = $link . "<a class='btn btn-sm btn-outline-secondary m-1' href='$url&page=$j'> $j </a>";
        }
        return $link;
    }
}







