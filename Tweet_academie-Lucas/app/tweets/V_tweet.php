<?php
echo "tg strubi";
require_once("M_tweets.php");
$readTweet = $tweets->readTweet($_SESSION["id"]);
foreach ($readTweet as $key => $value)
{
	echo '
	
	<div class="Ajax-postTweet">
		<form id="Ajax-postTweet" method="POST" action="app/tweets/C_tweets.php">
			<textarea name="content" rows="4" cols="50" placeholder="redige ton tweet"></textarea><input type="submit">
		</form>     
	</div>

	<!-- Afficher la photo de profil du membre qui a posté le tweet -->
	<img class="avatar-tweet" src="public/css/images/index.png"/>
	<!-- Afficher son login/prénom nom -->
	<h4>'.$value->login.'</h4><span class="compte-admin">✔</span>

	<p>10h</p>

	<span class="content">'.$value->content.'</span>
	<span class="glyphicon glyphicon-heart heart"></span>
	<span class="glyphicon glyphicon-retweet retweet"></span>
	<span class="glyphicon glyphicon-share-alt share-alt"></span>';

}
?> 