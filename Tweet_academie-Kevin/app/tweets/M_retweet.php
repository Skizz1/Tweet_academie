<?php
use App\Model\Database;
require_once('../M_Model.php');
class reTweetsModel extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = 'tp_retweets';
    }

    public function getRetweets($id)
    {
        $sql = "SELECT *, (SELECT login FROM tp_users WHERE id = {$id}) AS tweeterLogin,
                          (SELECT id FROM tp_users WHERE id = {$id}) AS tweeterID
                FROM {$this->table}
                INNER JOIN tp_tweets
                ON {$this->table}.tweet_id = tp_tweets.id
                INNER JOIN tp_users
                ON tp_tweets.user_id = tp_users.id
                WHERE {$this->table}.user_id = {$id}";
        $req = Database::get()->prepare($sql);
        $req->execute();
        $data = $req->fetchAll();
        return $data;
    }
}