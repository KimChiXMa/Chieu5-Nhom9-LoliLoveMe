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
}
