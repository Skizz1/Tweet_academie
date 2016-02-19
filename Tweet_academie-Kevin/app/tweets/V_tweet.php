<?php
require_once("M_tweets.php");
require_once("C_@#Tweet.php");
require_once("../profile/M_picture.php");
$readTweet = $tweets->readTweet($_SESSION["id"]);
$Mpicture  = new Mpicture;
$urlUser = new urlUser;

foreach ($readTweet as $key => $value)
{
    echo '
	<!-- Afficher la photo de profil du membre qui a posté le tweet -->
	<img class="avatar-tweet" src="public/css/images/users/' . $Mpicture->LookPicture($value->follow_id) . '.png"/>

	<!-- Afficher son login/prénom nom -->
	<h4>' . $value->login . '</h4><span class="compte-admin">✔</span>

	<p>10h</p>

	<span class="content">' . $urlUser->C_urlUser($value->content) . '</span>

	<span class="glyphicon glyphicon-heart heart"></span>
	<span class="glyphicon glyphicon-retweet retweet" data-id="' . $value->id . '"></span>
	<span class="glyphicon glyphicon-share-alt share-alt"></span>
	<hr/>';

}

?>

