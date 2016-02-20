<?php
use App\Model\Database;
include('../M_Model.php');

class TweetsModel extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = 'tp_tweets';
    }
    /**
     * Supprime un tweet
     * @param int $id ID
     */
    public function remove($id)
    {
        $sql = ("DELETE FROM {$this->table} WHERE id = {$id}");
        $req = Database::get()->prepare($sql);
        $req->execute();
    }

    /**
     * Compte le nombre de tweets d'un utilisateur
     * @param int $id ID
     * @return nombre de tweets
     */
    public function tweetCount($id)
    {
        $sql = ("SELECT COUNT(id) AS tweets FROM {$this->table} WHERE user_id = {$id}");
        $req = Database::get()->prepare($sql);
        $req->execute();
        return $req;
    }

    public function readTweet($id)
    {

        $connexion = Database::get()->prepare("
            SELECT * FROM tp_follow
            INNER JOIN tp_users
            ON tp_users.id = tp_follow.follow_id
            INNER JOIN tp_tweets ON tp_users.id = tp_tweets.user_id
            WHERE follower_id = '".$id."' OR follow_id = '".$id."'
            GROUP BY tp_tweets.id
            ORDER BY tp_tweets.id DESC");
        $connexion->execute();  

        $data = $connexion->fetchAll();
        return $data;   
    }

    public function UserExiste($login)
    {
        $connexion = Database::get()->prepare("
            SELECT * FROM tp_users
            WHERE login = '".$login."' ");
        $connexion->execute();  
        $data = $connexion->fetchAll();
        return $data;   
    }


    /**
     * Retourne tous les champs
     * @param int $id ID
     * @return mixed
     */
    public function getUserTweets($id)
    {
        $sql = "SELECT *, tp_tweets.id AS tweetId
                FROM {$this->table}
                LEFT JOIN tp_users
                ON tp_users.id = {$this->table}.user_id
                WHERE {$this->table}.user_id = {$id}
                ORDER BY {$this->table}.id DESC";
        $req = Database::get()->prepare($sql);
        $req->execute();
        $data = $req->fetchAll();
        return $data;
    }

}
$tweets = new TweetsModel();
