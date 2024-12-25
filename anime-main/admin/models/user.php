
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
    public function addUser($username,$pass,$displayname,$email,$avt,$role)
    {
        $sql = self::$connection->prepare("INSERT INTO `user`(`id`, `username`, `pass`, `displayname`, `email`, `image`, `role`) VALUES ('',?,?,?,?,?,?)");
        $sql->bind_param("sssssi",$username,$pass,$displayname,$email,$avt,$role);
        $sql->execute();
    }
    public function deleteUser()
    {
        $sql = self::$connection->prepare("SELECT * FROM `user`");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function updateUser()
    {
        $sql = self::$connection->prepare("SELECT * FROM `user`");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
}
