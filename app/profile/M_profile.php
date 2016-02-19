<?php
require_once('../M_Model.php');

class ProfileModel extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = 'tp_users';
    }

}
$profile = new ProfileModel();