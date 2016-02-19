<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once("C_tweetController.php");

$retweet = new ControllerTweet();
$retweet->reTweet($_SESSION['id'], $_POST['tweetID']);
exit;