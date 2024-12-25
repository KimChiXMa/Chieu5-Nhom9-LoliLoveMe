<?php
class Comment extends Db
{
    //lấy ra các review của anime
    public function getAllReviewByIdAnime($idAnime)
    {
        $sql = self::$connection->prepare("SELECT *,user.* FROM `comment`,user WHERE `id_anime` = ? AND user.id = comment.id_user ORDER BY `created_at` DESC;");
        $sql->bind_param('i', $idAnime);
        $sql->execute();
        $comments = array();
        $comments = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $comments;
    }

    public function addReview($idUser,$idAnime,$review)
    {
        $sql = self::$connection->prepare("INSERT INTO `comment`(`id_user`, `comment`, `id_anime`) VALUES ('?','?','?')");
        $sql->bind_param('isi', $idUser, $review, $idAnime);
        $sql->execute();
    }
    
}