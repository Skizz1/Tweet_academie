<?php
include('../database.php');
class M_search
{

	function user($login)
	{
		$connexion = \App\Model\Database::get()->prepare("SELECT * from tp_users
			WHERE login = '".$login."' ");
		$connexion->execute();	
		$data = $connexion->fetchAll();
		return $data;
	}
	function tags($tags)
	{
		$connexion = \App\Model\Database::get()->prepare("SELECT * from tp_tweets 
			WHERE content LIKE '%".$tags."%' ");
		$connexion->execute();	
		$data = $connexion->fetchAll();
		return $data;
	}


}




?>