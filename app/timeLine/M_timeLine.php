<?php
class timeLine
{
	var $id;
	function __construct()
	{
		$this->id = $_SESSION["id"];
	}
	function viewTimeLine()
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
}

$timeLine = new timeLine;
$timeLine = $timeLine->viewTimeLine();


?>