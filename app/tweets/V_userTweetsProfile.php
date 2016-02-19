<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once("M_tweets.php");
require_once("M_retweet.php");
require_once("../profile/M_picture.php");

$avatar = new Mpicture();
$modelRetweets = new ReTweetsModel();
$retweets = $modelRetweets->getRetweets($_POST['id']);

$userAvatar = $avatar->LookPicture($_POST['id']);

$tweets = $tweets->getUserTweets($_POST['id']);

Header('content-type: application/json');
echo json_encode(compact('tweets', 'retweets', 'userAvatar'));
exit;