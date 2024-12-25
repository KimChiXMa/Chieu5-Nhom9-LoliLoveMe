<?php
class Cate extends Db
{
    public function addAnimeCate($idanime,$idcate)
    {
        $sql = self::$connection->prepare("INSERT INTO `anime_tag`(`id_anime`, `id_tag`) VALUES (?,?)");
        $sql->bind_param("ii",$idanime,$idcate);
        
        if($sql->execute()){
            return true;
        }
        return false;
    }
    public function deleteAnimeCateByID($idanime)
    {
        $sql = self::$connection->prepare("DELETE FROM `anime_tag` WHERE `id_anime` = ?");
        $sql->bind_param("i",$idanime);
        
        if($sql->execute()){
            return true;
        }
        return false;
    }
    public function addCate($cateName)
    {
        $sql = self::$connection->prepare("INSERT INTO `tag`(`name_tag`, `id_tag`) VALUES (?,'')");
        $sql->bind_param("s",$cateName);
        
        if($sql->execute()){
            return true;
        }
        return false;
    }
    public function updateCate($cateid,$cateName)
    {
        $sql = self::$connection->prepare("UPDATE `tag` SET `name_tag` = ? WHERE `id_tag`= ?");
        $sql->bind_param("si",$cateName,$cateid);
        
        if($sql->execute()){
            return true;
        }
        return false;
    }
    public function getAllCate()
    {
        $sql = self::$connection->prepare("SELECT * FROM `tag`");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function deleteCate($idcate)
    {
        $sql = self::$connection->prepare("DELETE FROM `tag` WHERE `id_tag`=?");
        $sql->bind_param("i",$idcate);
        $sql->execute();
    }
    public function getCateByID($idcate)
    {
        $sql = self::$connection->prepare("SELECT * FROM `tag` WHERE id_tag = ?;");
        $sql->bind_param('i', $idcate);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
}
