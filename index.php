<?php include('header.php'); ?>

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
									<form accept-charset="UTF-8" role="form" id="loginIndex" method="post" action="profil.php">
										<fieldset>
											<div class="login_champ">
												<input class="login_control" placeholder="Pseudonyme" name="username" type="text">
											</div>
											<div class="login_champ">
												<input id="singInPass"class="login_control pass_Control" placeholder="Password" name="password" type="password" value="">
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
			<form id="formRegister">
				<div class=".slide_inside">
					<div class="form-group">
						<div class="input-group">
							<h1>Inscription</h1>
						</div>
					</div>
					<div class="form-group">
						<label for="InputName">login</label>
						<div class="input-group">
							<input type="text" class="text-center form-control text-center JS_inputLogin" name="login" id="InputName" placeholder="login" required>
							<span id="LoginRegister" class="input-group-addon info"><span class="glyphicon glyphicon-user" id="imageLogin"></span></span>
						</div>
					</div>

					<div class="form-group">
						<label for="password">Enter password</label>
						<div class="input-group">
							<input type="password" class="form-control text-center JS_inputPass" id="passwordFirst" name="password" placeholder="Enter password" required>
							<span id="PassRegister" class="input-group-addon info"><span class="glyphicon glyphicon-asterisk" id="imagePass"></span></span>
						</div>
					</div>

					<div class="form-group">
						<label for="password">Confirm password</label>
						<div class="input-group">
							<input type="password" class="form-control text-center" id="passwordSecond" name="password" placeholder="Confirm password" required>
							<span id="PassRegister2" class="input-group-addon info"><span class="glyphicon glyphicon-asterisk" id="imagePass2"></span></span>
						</div>
					</div>

					<div class="form-group">
						<label for="InputEmail">Enter Email</label>
						<div class="input-group">
							<input type="email" class="form-control text-center" id="InputEmailFirst" name="InputEmail" placeholder="Enter Email" required>
							<span id="MailRegister1" class="input-group-addon info"><span id="imageMail1" class="glyphicon glyphicon-envelope"></span></span>
						</div>
					</div>

					<div class="form-group">
						<label for="InputEmail">Confirm Email</label>
						<div class="input-group">
							<input type="email" class="form-control text-center" id="InputEmailSecond" name="InputEmail" placeholder="Confirm Email" required>
							<span id="MailRegister2" class="input-group-addon info"><span id="imageMail2" class="glyphicon glyphicon-envelope"></span></span>
						</div>
					</div>

					<div class="form-group">
						<label for="prenom">Prenom</label>
						<div class="input-group">
							<input type="text" class="form-control text-center" id="inputPrenom" name="prenom" placeholder="Prenom" required>
							<span id="imgPrenom" class="input-group-addon info"><span id="firstRegister" class="glyphicon glyphicon-user"></span></span>
						</div>
					</div>

					<div class="form-group">
						<label for="nom">Nom</label>
						<div class="input-group">
							<input type="text" class="form-control text-center" id="inputNom" name="nom" placeholder="Nom" required>
							<span id="imgNom" class="input-group-addon info"><span id="lastRegister" class="glyphicon glyphicon-user"></span></span>
						</div>
					</div>

					<div class="form-group">
						<label for="city">City</label>
						<div class="input-group">
							<input type="text" class="form-control text-center" id="inputCity" name="city" placeholder="city" required>
							<span id="imgCity" class="input-group-addon info"><span id="cityRegister" class="glyphicon glyphicon-user"></span></span>
						</div>
					</div>

					<div class="form-group">
						<label for="anniv">Anniversaire</label>
						<div class="input-group">
							<input type="text" class="form-control text-center datepicker" id="inputAniv"  name="anniv" placeholder="Anniverssaire" required>
							<span id="" class="input-group-addon info"><span id="" class="glyphicon glyphicon-user"></span></span>
						</div>
					</div>

					<input type="submit" name="submit"  id="registerSubmit" value="inscription" class="btn btn-info pull-right">
				</div>
			</form>
			<div id="registerInfo"></div>
		</div>

<?php include('footer.php'); ?>

