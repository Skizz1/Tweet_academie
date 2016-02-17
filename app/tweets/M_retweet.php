<?php

// include('../M_Model.php');

class reTweetsModel extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = 'tp_retweet';
    }
}