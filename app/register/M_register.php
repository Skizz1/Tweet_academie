<?php
include('../database.php');

error_reporting(E_ALL & E_NOTICE);
ini_set('display_errors', 'on');
class registerSQL
{
	function registerAllReadyExiste($login,$mail)
	{
		$connexion = \App\Model\Database::get()->prepare("SELECT * from tp_users
			WHERE login = '".$login."' OR mail = '".$mail."'");
		$connexion->execute();	
		$data = $connexion->fetchAll();
		return $data;	
	}

	function register($login,$pass,$mail,$prenom,$nom,$city,$birthday)
	{	

		$connexion = \App\Model\Database::get()->prepare("INSERT INTO tp_users
			(mail,login,password,first_name,last_name,city,birthday,register)
			VALUE ( '".$mail."',  '".$login."', '".$pass."', '".$prenom."', '".$nom."','".$city."','".$birthday."', NOW()  )");
		$connexion->execute();
		echo "true";//Ajax
	}
}


?>