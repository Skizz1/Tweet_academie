<?php
$_SESSION["login"] = "root";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tweet@cademie</title>
	<link rel="stylesheet" type="text/css" href="../../public/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/style.css">
	<meta charset="UTF-8">
	<script type="text/javascript" src="../../public/java/JQuery.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="../../public/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../../public/java/java.js"></script>
	<!-- DATAPICKER -->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Twitter</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Rechercher">
					</div>
					<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
				</form>
				<li><button type="button" class="btn btn-primary navbar-btn"><span class="glyphicon glyphicon-log-out"></span></button></li>
				<!-- TIME LINE -->
				<li id="AjaxTimeLine"><a href="app/onlineUser/V_timeLine.php">Time line </a></li>
				<li id="AjaxTimeLine"><a href="app/onlineUser/V_timeLine.php"><?php echo $_SESSION["login"] ?> </a></li>

				<li id="AjaxTimeLine"><a href="app/follow/V_follow.php">LISTE FOLLOW</a></li>

			</ul>
		</div>
	</nav>
	<div class="container1">
		<div class="accueil">
			<div class="left">
				<div class="infos">
					<div class="twitter-widget">
						<div class="header cf">
			<!-- Afficher la photo de profil du membre connecté -->
							<img class="avatar" src="../../images/index.png" alt="Profil">
			<!-- Afficher le login du membre connecté -->
							<h2>Loïc De Stefano</h2>
						</div>
						<div class="stats cf">
							<a href="#" class="stat">
			<!-- Afficher nombre de tweets du membre connecté -->
								<strong>1,250</strong>
								tweets
							</a>
							<a href="#" class="stat">
			<!-- Afficher nombre de follow du membre connecté -->
								<strong>60</strong>
								following
							</a>
							<a href="#" class="stat">
			<!-- Afficher nombre de followers du membre connecté -->
								<strong>117</strong>
								followers
							</a>
						</div>
						<ul class="menu cf">
							<li><a href="#" class="ico-compose">Compose</a></li>
							<li><a href="#" class="ico-mentions">Mentions</a></li>
							<li><a href="#" class="ico-profile">Profile</a></li>
							<li><a href="#" class="ico-settings">Settings</a></li>
						</ul>
					</div> 
				</div>
				<div class="actualite">
		<!-- Afficher les actualités récentes des gens Follows par le membre connecté -->
					<div class="infos">
					<div class="twitter-widget1">
						<div class="stats cf actu">
							<span>Actualités récentes</span>
						</div>
		<!-- Afficher le nom prenom et texte du tweet avec max 30 caractères et des "..." après -->
						<span></span>
					</div> 
				</div>
				</div>
			</div>
			<div class="right">
				<div class="tweet">
		<!-- Afficher la photo de profil du membre qui a posté le tweet -->
					<img class="avatar-tweet" src="../../images/index.png" />
					<div class="contenu">
		<!-- Afficher son login/prénom nom -->
						<h4>Loïc De Stefano</h4><span class="compte-admin">✔</span>
		<!-- Afficher l'heure a laquelle à été poster le tweet -->
						<p>10h</p>
		<!-- Afficher le @ du membre qui a posté le tweet -->
						<h5>@loicdsfn</h5>
		<!-- Afficher le contenu du tweet ainsi que le @ d'un/des membres notifiés et du/des # mentionnés -->
						<span class="content">Tweet d'expo pour visuel d'implementation du php de <a href="#">@sauvan_k</a> ;) <a href="">#CSSdeOUFFFF</a></span>
		<!-- Afficher image ou vidéo si jamais il y en a -->
						<img class="contenu-img" src="../../images/image-slider-2.jpg" />
						<span class="glyphicon glyphicon-heart heart"></span>
						<span class="glyphicon glyphicon-retweet retweet"></span>
						<span class="glyphicon glyphicon-share-alt share-alt"></span>
					</div>
				</div>
			</div>
		</div>
	</div>