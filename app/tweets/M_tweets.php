<?php
use App\Model\Database;
session_start();
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

        $connexion = \App\Model\Database::get()->prepare("SELECT * from tp_follow  INNER JOIN tp_users on tp_users.id = tp_follow.follow_id INNER JOIN tp_tweets on  tp_users.id  =  tp_tweets.user_id  WHERE follower_id = '".$id."' OR follow_id = '".$id."' GROUP BY tp_tweets.id");
        $connexion->execute();  

        $data = $connexion->fetchAll();
        return $data;   
    }

    public function UserExiste($login)
    {
        $connexion = \App\Model\Database::get()->prepare("SELECT * from tp_users
            WHERE login = '".$login."' ");
        $connexion->execute();  
        $data = $connexion->fetchAll();
        return $data;   
    }
}
$tweets = new TweetsModel();
$tweetCount = $tweets->tweetCount($tweets->userId);

