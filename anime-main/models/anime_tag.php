<?php
class AnimeTag extends Db
{
    public function getTag($idAnime)
    {
        $sql = self::$connection->prepare("SELECT tag.name_tag FROM anime_tag , tag WHERE id_anime = 1 AND anime_tag.id_tag = tag.id_tag;");
        $sql->bind_param("i",$idAnime);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }

    






}


