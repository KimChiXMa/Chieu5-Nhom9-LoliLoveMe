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




    
}

