<!DOCTYPE html>
<html>
<head>
<title>Tweet academie</title>
    <link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/home.css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <meta charset="UTF-8">
    <script type="text/javascript" src="public/java/JQuery.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="public/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="public/java/java.js"></script>
    <script type="text/javascript" src="public/java/konami.js"></script>
    <link rel="icon" type="image/png" href="public/css/images/favicon.png" />
    <!-- DATAPICKER -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head>
<body>

<div id="slide2">
	<div class=".slide_inside">
		<div id="clouds">
			<span class="titre-tweet">Tweet@cademie</span>
			<span class="contour">Tweet@cademie</span>	
			<div class="cloud x1"></div>
			<div class="cloud x2"></div>
			<div class="cloud x3"></div>
			<div class="cloud x4"></div>
			<div class="cloud x5"></div>
			<div class="cloud x6"></div>
			<div class="cloud x7"></div>
			<div class="container">
				<div class="test">
					<div class="authentification">
						<div class="compte-infos">
							<span>Vous avez déjà un compte ?</span>
							<p>Ne perdez pas votre temps à re-créer un compte si vous en avez déjà un.</p> 
							<p>Vos données (tweets, follows, followers) seront perdu ! Ne prennez pas le risque.</p>
							<input type="submit" class="btn btn-primary connex" id='Ajax-connexion' value="Connexion" />
						</div>
						<div class="none2">
							<div class="login">
								<div class="user-row">
									<h3>Déjà membre ?</h3>
								</div>
								<form id="loginIndex" accept-charset="UTF-8" method="post" action="#">
									<div class="login_champ">
										<input class="login_control text-center form-control" type="text" placeholder="Pseudonyme" name="username">
									</div>
									<div class="login_champ">
										<input id="singInPass" class="login_control text-center form-control" type="password" placeholder="Mot de passe" name="password">
									</div>
									<input id="buttonConect" class="btn-primary btn-block connect" type="submit" value="Connexion">
								</form>
							</div>
						</div>
					</div>
					<div id="registerInfo"></div>
				</div>
				<div class="test2">
					<form id="formRegister">
						<h1>Inscription</h1>
						<div class="form-group">
							<div class="input-group">
								<input type="text" class="form-control text-center" id="inputNom" name="nom" placeholder="Nom" required>
								<span id="imgNom" class="input-group-addon info"><span id="lastRegister" class="glyphicon glyphicon-user"></span></span>
							</div>
						</div>
						<div class="form-group1">
							<div class="input-group">
								<input type="text" class="form-control text-center" id="inputPrenom" name="prenom" placeholder="Prenom" required>
								<span id="imgPrenom" class="input-group-addon info"><span id="firstRegister" class="glyphicon glyphicon-user"></span></span>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<input type="text" class="text-center form-control text-center JS_inputLogin" name="login" id="InputName" placeholder="Pseudonyme" required>
								<span id="LoginRegister" class="input-group-addon info"><span class="glyphicon glyphicon-user" id="imageLogin"></span></span>
							</div>
						</div>
						<div class="form-group1">
							<div class="input-group">
								<input type="text" class="form-control text-center datepicker" id="inputAniv"  name="anniv" placeholder="Date de naissance" required>
								<span id="" class="input-group-addon info"><span id="" class="glyphicon glyphicon-user"></span></span>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<input type="email" class="form-control text-center" id="InputEmailFirst" name="InputEmail" placeholder="Email (exemple@exemple.fr)" required>
								<span id="MailRegister1" class="input-group-addon info"><span id="imageMail1" class="glyphicon glyphicon-envelope"></span></span>
							</div>
						</div>

						<div class="form-group1">
							<div class="input-group">
								<input type="email" class="form-control text-center" id="InputEmailSecond" name="InputEmail" placeholder="Confirmer votre email" required>
								<span id="MailRegister2" class="input-group-addon info"><span id="imageMail2" class="glyphicon glyphicon-envelope"></span></span>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<input type="password" class="form-control text-center JS_inputPass" id="passwordFirst" name="password" placeholder="Mot de passe" required>
								<span id="PassRegister" class="input-group-addon info"><span class="glyphicon glyphicon-asterisk" id="imagePass"></span></span>
							</div>
						</div>
						<div class="form-group1">
							<div class="input-group">
								<input type="password" class="form-control text-center" id="passwordSecond" name="password" placeholder="Confirmer votre mot de passe" required>
								<span id="PassRegister2" class="input-group-addon info"><span class="glyphicon glyphicon-asterisk" id="imagePass2"></span></span>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<input type="text" class="form-control text-center" id="inputCity" name="city" placeholder="Ville" required>
								<span id="imgCity" class="input-group-addon info"><span id="cityRegister" class="glyphicon glyphicon-user"></span></span>
							</div>
						</div>
						<div class="form-group1">
							<div class="input-group">
								<span id="imgCity" class="addon">Sexe</span>
								<input type="radio" class="form-control sexeh" id="inputCity" name="sexe" placeholder="H" value="homme" required><span class="radio homme">Homme</span>
								<input type="radio" class="form-control sexe" id="inputCity" name="sexe" placeholder="F" value="femme" required><span class="radio femme">Femme</span>
							</div>
						</div>
						<input type="submit" name="submit"  id="registerSubmit" value="inscription" class="btn btn-info">
					</form>
					<div class="inscript-infos">
						<div>
							<span class="nouveau">Nouveau sur Twitter ?</span>
							<span class="p1">Inscrivez-vous maintenant pour</span> 
							<span class="p2">obtenir votre fil d'actualité</span>
							<span class="p3">personalisé ! </span>
							<input id="inscription" class="btn-primary inscript" type="submit" value="Inscription" />	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('footer.php'); ?>

