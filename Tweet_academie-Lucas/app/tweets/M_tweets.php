<?php
use App\Model\Database;
require('app/M_Model.php');

class TweetsModel extends Model
{
    public function __construct()
    {
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
     */
    public function tweetCount($id){
        $sql = ("SELECT COUNT(id) FROM {$this->table} WHERE id = {$id}");
        $req = Database::get()->prepare($sql);
        $req->execute();
    }
}