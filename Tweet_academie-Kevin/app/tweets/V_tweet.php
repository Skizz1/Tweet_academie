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
        $retweet = '<div class="tweet-time"><span class="glyphicon glyphicon-share-alt share-alt"></span></div>';
    }
    else
    {
        $retweet = '<div class="tweet-time"><span class="glyphicon glyphicon-retweet retweet" data-id="' . $value->id . '"></span>
	                <span class="glyphicon glyphicon-share-alt share-alt"></span></div>';
    }
    echo '
	<img class="avatar-tweet" src="public/css/images/users/' . $Mpicture->LookPicture($value->follow_id) . '.png"/>
	<h4><a href="app/profile/V_profile.php?id=' . $value->user_id . '">' . $value->login . '</a></h4>
	<p class="contenu-time">' . $urlUser->C_urlUser($value->content) . '</p>
	<p class="content">Tweeté le : ' . $value->tweet_date . '</p>' . $retweet . '<hr/>';
}