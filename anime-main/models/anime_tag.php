<?php
class AnimeTag extends Db
{
    //lấy tên tag của 1 bộ anime
    public function getTag($idAnime)
    {
        $sql = self::$connection->prepare("SELECT tag.name_tag FROM anime_tag , tag WHERE id_anime = ? AND anime_tag.id_tag = tag.id_tag;");
        $sql->bind_param("i",$idAnime);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    




}


