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
				<div class="avatar">
					<img src="../../images/index.png" />
				</div>
				<div class="infos">
					<span class="login">Loïc De Stefano</span>
					<div class="abos">
						<button class="btn follow">Abonnements</button>
						<button class="btn follow">Abonnés</button>
					</div>
					<div class="bouton">
						<button class="btn btn-primary">Photos</button>
						<button class="btn btn-primary">Photos</button>
					</div>
				</div>
				<div class="actualite">
					<div class="actu">Actualités récentes</div>
				</div>
			</div>
			<div class="right">

			</div>
		</div>
	</div>