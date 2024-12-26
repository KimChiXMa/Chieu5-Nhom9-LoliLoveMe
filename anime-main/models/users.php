<?php
class User extends Db
{
    public function UserLogin($username_email, $password)
    {
        $sql = self::$connection->prepare("SELECT `id`, `username`, `pass`, `displayname`, `email` FROM `user` WHERE (`username` = ? or `email` = ?) and `pass` = ?;");
        $sql->bind_param("sss",$username_email, $username_email,$password);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function getalluser()
    {
        $sql = self::$connection->prepare("SELECT `id`, `username`, `pass`, `displayname`, `email` FROM `user`");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function UserRegiser($username,$password, $email)
    {
        $sql = self::$connection->prepare("INSERT INTO `user`(`id`, `username`, `pass`, `displayname`, `email`) VALUES ('',?,?,?,?)");
        $sql->bind_param("ssss",$username, $password,$username,$email);
        if($sql->execute()==true)
        {
            return true;
        }
        return false;
    }


    public function getUserNameById($idUser){
        $sql = self::$connection->prepare("SELECT * FROM `user` WHERE `id` = ?;");
        $sql->bind_param("i", $idUser);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
}