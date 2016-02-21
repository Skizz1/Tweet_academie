<?php
require_once('../database.php');
require_once('../session_start.php');
class Mcount
{

	var $id;
	function __construct()
	{
		$this->id = $_SESSION["id"];
	}

	function CountMefollow()
	{
		$connexion = \App\Model\Database::get()->prepare("SELECT COUNT(follower_id) AS nbrFollow
			FROM tp_follow
			WHERE follower_id ='".$this->id."'
			");
		$connexion->execute();
		$data = $connexion->fetchAll();
		return $data;
	}


	function Mefollower()
	{

		$connexion = \App\Model\Database::get()->prepare("SELECT *,count(follow_id) AS nbrFollow
			FROM `tp_follow` INNER JOIN tp_users
			ON tp_follow.follower_id = tp_users.id
			WHERE follow_id = '".$this->id."'");
		$connexion->execute();
		$data = $connexion->fetchAll();
		return $data;
	}

}


$Mcount = new Mcount;
$Mefollower = $Mcount->Mefollower();
$CountMefollow = $Mcount->CountMefollow();
?>