<?php
include("../database.php");
class userExiste
{
	function User($login,$pass)
	{
		$connexion = \App\Model\Database::get()->prepare("SELECT * FROM tp_users
			WHERE (login = '".$login."' OR email = '".$login."') AND password = '".$pass."' ");
		$connexion->execute();	
		$data = $connexion->fetchAll();
		return $data;
	}
}

?>