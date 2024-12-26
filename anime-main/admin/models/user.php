
<?php
class Useradmin extends Db
{
    public function getAllUser()
    {
        $sql = self::$connection->prepare("SELECT * FROM `user`");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function getUserRole($userlogin)
    {
        $sql = self::$connection->prepare("SELECT `role` FROM `user` WHERE `id` = ?");
        $sql->bind_param("i",$userlogin);
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function getUserByID($iduser)
    {
        $sql = self::$connection->prepare("SELECT * FROM `user` WHERE `id` = ?");
        $sql->bind_param("i",$iduser);
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function getUserLimit($page,$count)
    {
        $start = ($page - 1)*$count;
        $sql = self::$connection->prepare("SELECT * FROM `user` LIMIT ?,?");
        $sql->bind_param("ii",$start,$count);
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function addUser($username,$pass,$displayname,$email,$avt,$role)
    {
        $sql = self::$connection->prepare("INSERT INTO `user`(`id`, `username`, `pass`, `displayname`, `email`, `image`, `role`) VALUES ('',?,?,?,?,?,?)");
        $sql->bind_param("sssssi",$username,$pass,$displayname,$email,$avt,$role);
        $sql->execute();
    }
    public function deleteUser($iduser)
    {
        $sql = self::$connection->prepare("DELETE FROM `user` WHERE `id` = ?");
        $sql->bind_param("i",$iduser);
        $sql->execute();
    }
    public function updateUser($username,$pass,$displayname,$email,$avt,$role,$iduser)
    {
        $sql = self::$connection->prepare("UPDATE `user` SET `username`=?,`pass`=?,`displayname`=?,`email`=?,`image`=?,`role`=? WHERE `id`=?");
        $sql->bind_param("ssssssi",$username,$pass,$displayname,$email,$avt,$role,$iduser);
        $sql->execute();
    }
    
}
