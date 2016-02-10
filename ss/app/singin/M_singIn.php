<?php
include("../database.php");
class userExiste
{
	function User($login,$pass)
	{
		$connexion = \App\Model\Database::get()->prepare("SELECT * from tp_users
			WHERE (login = '".$login."' OR mail = '".$login."') and password = '".$pass."' ");
		$connexion->execute();	
		$data = $connexion->fetchAll();
		return $data;
	}
}

?>