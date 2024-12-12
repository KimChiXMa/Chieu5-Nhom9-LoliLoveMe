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
}



