<div class="container">
	<div class="row ">
		<div id="registerInfo" class="col-lg-4"></div>
		<form role="form"  id="formRegister">
			<div class="col-lg-4">

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
				<input type="submit" name="submit"  id="registerSubmit" value="inscription" class="btn btn-info pull-right">
			</div>
		</form>
		<div class="col-lg-4"></div>
	</div>
</div>
