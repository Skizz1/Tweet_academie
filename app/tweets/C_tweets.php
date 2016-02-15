<?php
require_once('M_tweets.php');

class TweetsController
{
	function createTweet($content)
	{
		$date = date('Y-m-d');
		$TweetsModel = new TweetsModel;
		$TweetsModel->create(["content"=>$content,"user_id"=>$_SESSION["id"],"tweet_date"=>$date]);
	}
}
echo "message envoye";
$TweetsController = new TweetsController;
$TweetsController->createTweet($_POST["content"]);