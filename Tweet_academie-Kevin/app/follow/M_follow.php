<?php
session_start();
include('../database.php');

class Cfollow
{
	var $id;
	function __construct()
	{
		$this->id = $_SESSION["id"];
	}
	function Mefollower()
	{
		$connexion = \App\Model\Database::get()->prepare("SELECT * from tp_follow
			INNER JOIN tp_tweets
			on tp_tweets.user_id = tp_follow.follow_id
			INNER JOIN tp_users on tp_tweets.user_id = tp_users.id
			WHERE follower_id = '".$this->id."'");
		$connexion->execute();	
		$data = $connexion->fetchAll();
		return $data;	
	}
	function Mefollow()
	{
		$connexion = \App\Model\Database::get()->prepare("SELECT * from tp_follow
			INNER JOIN tp_tweets
			on tp_tweets.user_id = tp_follow.follow_id
			INNER JOIN tp_users on tp_tweets.user_id = tp_users.id
			WHERE follow_id = '".$this->id."'
			GROUP BY follow_id
			");
		$connexion->execute();	
		$data = $connexion->fetchAll();
		return $data;	
	}

}

$Cfollow = new Cfollow;
$Mefollower = $Cfollow->Mefollower();
$Mefollow = $Cfollow->Mefollow();

?>