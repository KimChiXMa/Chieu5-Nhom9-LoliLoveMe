<?php
class Tag extends Db
{
    //lấy tất cả tag
    public function getAllTag()
    {
        $sql = self::$connection->prepare("SELECT * FROM `tag` ORDER BY `tag`.`name_tag` ASC");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }


    //lấy tên tag
    public function getNameTag($idTag)
    {
        $sql = self::$connection->prepare("SELECT * FROM `tag` WHERE id_tag = ?;");
        $sql->bind_param('i', $idTag);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function getAllTagByAnimeID($idanime)
    {
        $sql = self::$connection->prepare("SELECT `tag`.`name_tag`,`tag`.`id_tag` FROM `anime_tag`,`tag`,`anime` WHERE `anime_tag`.`id_anime` = `anime`.`id` AND `anime_tag`.`id_tag` = `tag`.`id_tag` AND `anime`.`id` = ?;");
        $sql->bind_param('i', $idanime);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    
}
