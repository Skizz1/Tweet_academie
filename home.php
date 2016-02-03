<!-- A laisser avant les balises html -->
<!-- <?php 

// if (session_start() == PHP_SESSION_NONE) {
// 	session_start();
//}

?> -->

<!-- Placer le code la ou je veux afficher le message alert -->
<!-- <?php //if (Session::getInstance()->hasFlashes()): ?>
<?php //foreach(Session::getInstance()->getFlashes() as $type => $message): ?> -->
	<!-- mettre div avec message alert -->
<!-- <?php //endforeach; ?>
<?php //endif; ?> -->

<!DOCTYPE html>
<html>
<head>
	<title>Meetic</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style_home.css">
	<meta charset="UTF-8">
</head>
<body>
	<div id="slide1">
		<div class=".slide_inside">
			<div class="container">
				<div id="meetic">
					<h1>My <span class="titre">Me</span>etic</h1>
					<p><span class="titre">#</span>LoveYourImperfections</p>
					<a id="connect" class="connection" href="#slide2">Se connecter</a>
					<a id="joinus" class="connection" href="#slide3">Nous rejoindre</a>
				</div>
				<div id="smooth">
					<div id="hr1"></div>
					<a href="#slide2"><span id="fleche" class="glyphicon glyphicon-chevron-down"></span></a>
					<div id="hr2"></div>
				</div>
			</div>
		</div>
	</div>
	<div id="slide2">
		<div class=".slide_inside">
			<div class="container">
				<div class="row vertical-offset-100">
					<div class="col-md-4 col-md-offset-4">
						<div class="panel panel-default login">
							<div class="panel-heading">                            
								<div class="row-fluid user-row">
									<i class="fa fa-eye fa-3x"></i> 
								</div>
								<h3 class="panel-title user-row">Déja membre ?</h3> 
							</div>
							<div class="panel-body">
								<div class="login_champ">
									<label></label>
									<hr>
								</div>
								<form accept-charset="UTF-8" role="form" method="post" action="profil.php">
									<fieldset>
										<div class="login_champ">
											<input class="login_control" placeholder="Pseudonyme" name="username" type="text">
										</div>
										<div class="login_champ">
											<input class="login_control" placeholder="Password" name="password" type="password" value="">
										</div>
										<input class="btn btn-lg btn-success btn-block" type="submit" value="Connexion">
									</fieldset>
								</form>
							</div>
						</div>
						<div class="container">
							<div id="gratuit">
								<p>Pas encore membre ? <a href="#slide3">Inscrivez-vous gratuitement !</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="slide3">
		<div class=".slide_inside">
			<div class="container">
				<div class="page-lock">
					<div class="page-body">
						<div class="lock-head">
							Inscription
						</div>
						<div class="lock-body">
							<form class="lock-form pull-left" action="Formulaire.php" method="post">
								<div class="form-group sexe">
									<label class="sexe2">Sexe :</label>
									<label class="checkbox-inline">Femme</label>
									<input class=" placeholder-no-fix" type="checkbox" autocomplete="off" value="Femme" name="femme"/>
									<label class="checkbox-inline">Homme</label>
									<input class=" placeholder-no-fix" type="checkbox" autocomplete="off" value="Homme" name="homme"/>
								</div>
								<div class="form-group1">
									<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Pseudonyme" name="username"/>
								</div>
								<div class="form-group1">
									<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Date de naissance (1966/21/10)" name="naissance"/>
								</div>
								<div class="form-group">
									<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Prénom" name="prenom"/>
								</div>
								<div class="form-group1">
									<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Nom" name="nom"/>
								</div>
								<div class="form-group">
									<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Ville" name="ville"/>
								</div>
								<div class="form-group1">
									<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Pays" name="pays"/>
								</div>
								<div class="form-group">
									<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Région" name="region"/>
								</div>
								<div class="form-group1">
									<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Département" name="departement"/>
								</div>
								<div class="form-group">
									<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="e-mail (exemple@exemple.com)" name="email"/>
								</div>
								<div class="form-group1">
									<input class="form-control placeholder-no-fix" type="Password" autocomplete="off" placeholder="Confirmez votre mot de passe" name="_confirm"/>
								</div>
								<div class="form-group">
									<input class="form-control placeholder-no-fix" type="Password" autocomplete="off" placeholder="Mot de passe" name="password"/>
								</div>
								<div class="form-actions margin">
									<button type="submit" class="btn btn-success uppercase">S'inscrire</button>
								</div>
							</form>
						</div>
						<div class="lock-bottom">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="jQuery-Parallax-master/scripts/jquery.localscroll-1.2.7-min.js"></script>
	<script type="text/javascript" src="jQuery-Parallax-master/scripts/jquery.scrollTo-1.4.2-min.js"></script>
	<script type="text/javascript" src="parallax.js"></script>
</body>
</html>