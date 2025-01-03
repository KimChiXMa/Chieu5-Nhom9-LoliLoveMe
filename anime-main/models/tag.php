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

    public function checkSelectedTag($idanime,$idtag)
    {
        $sql = self::$connection->prepare("SELECT `anime_tag`.`id_tag` FROM `anime_tag` WHERE `anime_tag`.`id_tag` = ? AND `anime_tag`.`id_anime` = ?");
        $sql->bind_param("ii",$idtag,$idanime);
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        if(count($item)>0){
            return true;
        }
        return false;
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
