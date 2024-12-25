<?php
class Follow extends Db
{
    //in ra danh sách tập của anime đó
    public function getFollow($idUser,$idAnime)
    {
        $sql = self::$connection->prepare("SELECT * FROM follow WHERE follow.user_id = ? AND follow.anime_id = ?;");
        $sql->bind_param('ii',$idUser, $idAnime);
        $sql->execute();

        $count = $sql->get_result()->num_rows;

        if($count == 0){
            return false;
        }else{
            return true;
        }
    }


    //thực hiện follow phim
    public function eventFollow($idUser, $idAnime)
    {
        $sql = self::$connection->prepare("INSERT INTO `follow`(`user_id`, `anime_id`) VALUES (?, ?);");
        $sql->bind_param("ii",$idUser, $idAnime);
        $sql->execute();
    }

    //unfollow phim
    public function eventUnfollow($idUser, $idAnime)
    {
        $sql = self::$connection->prepare("DELETE FROM `follow` WHERE `user_id` = ? AND `anime_id` = ?;");
        $sql->bind_param("ii",$idUser, $idAnime);
        $sql->execute();
    }




}
