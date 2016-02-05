<?php


require('app/model/M_Model.php');


class ProfileModel extends Model
{
    public function __construct()
    {
        $this->table = 'tp_users';
    }

}