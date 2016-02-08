<?php
session_start();
require_once('../database.php');

class Cfollow
{
	var $id;
	function __construct()
	{
		$this->id = $_SESSION["id"];
	}
	function Mefollower()
	{
		$connexion = \App\Model\Database::get()->prepare("SELECT *,count(follow_id) as nbrFollow  FROM `tp_follow` inner join tp_users on tp_follow.follower_id = tp_users.id WHERE follow_id = '".$this->id."'");
		$connexion->execute();	
		$data = $connexion->fetchAll();
		return $data;	
	}
	function CountMefollow()
	{
		$connexion = \App\Model\Database::get()->prepare("SELECT count(follow_id) as nbrFollow 
			from tp_follow
			INNER JOIN tp_tweets
			on tp_tweets.user_id = tp_follow.follow_id
			INNER JOIN tp_users on tp_tweets.user_id = tp_users.id
			WHERE follower_id = '".$this->id."'
			");
		$connexion->execute();	
		$data = $connexion->fetchAll();
		return $data;	
	}
	function Mefollow()
	{
		$connexion = \App\Model\Database::get()->prepare("SELECT * 
			from tp_follow
			INNER JOIN tp_tweets
			on tp_tweets.user_id = tp_follow.follow_id
			INNER JOIN tp_users on tp_tweets.user_id = tp_users.id
			WHERE follower_id = '".$this->id."'
			");
		$connexion->execute();	
		$data = $connexion->fetchAll();
		return $data;	
	}
	/*
	* Rajoute un follow dans la database
	*/
	function addFollowSQL($follow)
	{
		$connexion = \App\Model\Database::get()->prepare("INSERT INTO tp_follow (follow_id,follower_id) VALUES ('".$follow."','".$_SESSION["id"]."') ");
		$connexion->execute();	
	}

}

$Cfollow = new Cfollow;
$Mefollower = $Cfollow->Mefollower();
$CountMefollow = $Cfollow->CountMefollow();

?>