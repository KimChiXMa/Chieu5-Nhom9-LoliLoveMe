<?php
class Episode extends Db
{
    //in ra danh sách tập của anime đó
    public function getEpisode($idAnime)
    {
        $sql = self::$connection->prepare("SELECT * FROM `episode` WHERE `id_anime` = ?  
ORDER BY `episode`.`tentap` ASC;");
        $sql->bind_param('i', $idAnime);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    //lấy url video khi có tập và id anime
    public function getUrl($idAnime,$episode)
    {
        $sql = self::$connection->prepare("SELECT * FROM `episode` WHERE `id_anime` = ?  AND `tentap` = ?;");
        $sql->bind_param("ii", $idAnime,$episode);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
}
