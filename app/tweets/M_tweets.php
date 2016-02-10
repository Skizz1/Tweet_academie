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
    public function tweetCount($id){
        $sql = ("SELECT COUNT(id) AS tweets FROM {$this->table} WHERE user_id = {$id}");
        $req = Database::get()->prepare($sql);
        $req->execute();
        return $req;
    }
}
$tweets = new TweetsModel();
$tweetCount = $tweets->tweetCount($tweets->userId);