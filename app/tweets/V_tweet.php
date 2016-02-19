<?php
require_once("M_tweets.php");
require_once("C_@#Tweet.php");
require_once("../profile/M_picture.php");
$readTweet = $tweets->readTweet($_SESSION["id"]);
$Mpicture  = new Mpicture;
$urlUser   = new urlUser;
foreach ($readTweet as $key => $value)
{
    if ($value->user_id === $_SESSION['id'])
    {
        $retweet = '<span class="glyphicon glyphicon-share-alt share-alt"></span>';
    } else {
        $retweet = '<span class="glyphicon glyphicon-retweet retweet" data-id="' . $value->id . '"></span>
	                <span class="glyphicon glyphicon-share-alt share-alt"></span>';
    }
    echo '
	<img class="avatar-tweet" src="public/css/images/users/' . $Mpicture->LookPicture($value->follow_id) . '.png"/>
	<h4>' . $value->login . '</h4>
	<p>' . $urlUser->C_urlUser($value->content) . '</p>
	<p class="content">Tweeté le : ' . $value->tweet_date . '</p>' . $retweet . '<hr/>';
}