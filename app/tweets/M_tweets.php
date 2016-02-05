<?php
use App\Model\Database;
require('app/model/M_Model.php');

class TweetsModel extends Model
{
    public function __construct()
    {
        $this->table = 'tp_tweets';
    }

    public function remove($id)
    {
        $sql = ("DELETE FROM {$this->table} WHERE id = {$id}");
        $req = Database::get()->prepare($sql);
        $req->execute();
    }
}