$(document).ready(function()
{
	var login,
	regexLogin;
	var pass;
	var pass1;
	var pass2;
	var regexPass;
	var mail1;
	var mail2;
	var regexmail;
	var prenom;
	var regexPrenom;
	var nom;
	var regexNom;
	var city;
	var regexCity;
	var Vlogin;
	var Vpass;
	var Vmail;
	var Vprenom;
	var VNom;
	var VCity;
	var birthday;	

	$('.datepicker').datepicker({ dateFormat: 'yy-mm-dd'});

	$('#registerSubmit').prop('disabled', true);

	function redirectHome()
	{
		console.log("home")
		$.ajax
		({
			url:"app/home/V_home.php",
			success:function(e)
			{
				$("body").html(e)
				/*
				* Permet de cache le texte area des tweets
				*/
				$(".Ajax-postTweet").hide();
			}	
		})
	}
	function logOut()
	{
		$(document).on("click","#logOut",function()
		{
			$.ajax({
				url : 'app/onlineUser/C_disconect.php',
				success:function(data)
				{
					window.location.replace("index.php")
				}
				
			})
		})
	}
	logOut()

	$(document).on('keyup', '#formRegister input', function()
	{
			//Verification login
			login = $(".JS_inputLogin").val();
			regexLogin = /^[a-zA-Z]+$/.test(login);

			pass = $(".JS_inputPass").val();
			pass1 = $("#passwordFirst").val();
			pass2 = $("#passwordSecond").val();
			/*Minimum 8 characters  1 Alphabet and 1 Number*/
			regexPass = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/.test(pass);

			mail1 = $("#InputEmailFirst").val();
			mail2 = $("#InputEmailSecond").val();
			regexmail = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/.test(mail1);

			prenom = $("#inputPrenom").val();
			regexPrenom = /^[a-zA-Z]+$/.test(prenom);

			nom = $("#inputNom").val();
			regexNom = /^[a-zA-Z]+$/.test(nom);

			city = $("#inputCity").val();
			regexCity = /^[a-zA-Z]+$/.test(city);

			birthday = $("#inputAniv").val();

/*
*login
*/
if (regexLogin) 
{
	$("#LoginRegister").removeClass();
	$("#LoginRegister").addClass('input-group-addon success');
	$("#imageLogin").removeClass();
	$("#imageLogin").addClass('glyphicon glyphicon-ok');
	Vlogin = true;
}
else
{
	$("#LoginRegister").removeClass();
	$("#LoginRegister").addClass('input-group-addon danger');
	$("#imageLogin").addClass('glyphicon glyphicon-remove');
	Vlogin = false;
}
/*
* PASSWORD
*/
if (regexPass === true && pass1 == pass2 ) 
{
	$("#imagePass").removeClass();
	$("#imagePass").addClass('glyphicon glyphicon-ok');

	$("#imagePass2").removeClass();
	$("#imagePass2").addClass('glyphicon glyphicon-ok');

	$("#PassRegister").removeClass();
	$("#PassRegister").addClass('input-group-addon success');

	$("#PassRegister2").removeClass();
	$("#PassRegister2").addClass('input-group-addon success');

	$("#registerInfo").html("<p>"+""+"</p>");

	Vpass = true;
}
else
{
	$("#imagePass").removeClass();
	$("#imagePass").addClass('glyphicon glyphicon-remove');

	$("#imagePass2").removeClass();
	$("#imagePass2").addClass('glyphicon glyphicon-remove');

	$("#PassRegister").removeClass();
	$("#PassRegister").addClass('input-group-addon danger');

	$("#PassRegister2").removeClass();
	$("#PassRegister2").addClass('input-group-addon danger');

	$("#registerInfo").html("<p>"+"Seulement des lettre et des chiffre 8 caracter minimum, les mot de passe doive etre identique"+"</p>")
	Vpass = false;
}

/*
*EMAIL
*/
if (regexmail === true && mail1 == mail2 ) 
{

	$("#imageMail1").removeClass();
	$("#imageMail2").removeClass();

	$("#imageMail1").addClass('glyphicon glyphicon-ok');
	$("#imageMail2").addClass('glyphicon glyphicon-ok');

	$("#MailRegister2").removeClass();
	$("#MailRegister2").addClass('input-group-addon success');

	$("#MailRegister1").removeClass();
	$("#MailRegister1").addClass('input-group-addon success');
	Vmail = true;
}
else
{
	$("#MailRegister1").removeClass();
	$("#MailRegister1").addClass('input-group-addon danger');

	$("#MailRegister2").removeClass();
	$("#MailRegister2").addClass('input-group-addon danger');

	$("#imageMail1").addClass('glyphicon glyphicon-remove');
	$("#imageMail2").addClass('glyphicon glyphicon-remove');
	Vmail = false;
}

/*
* PRENOM
*/
if (regexPrenom === true) 
{
	$("#imgPrenom").removeClass();
	$("#imgPrenom").addClass('input-group-addon success');
	$("#firstRegister").removeClass();
	$("#firstRegister").addClass('glyphicon glyphicon-ok');
	Vprenom = true;
}
else
{
	$("#imgPrenom").removeClass();
	$("#imgPrenom").addClass('input-group-addon danger');
	$("#firstRegister").addClass('glyphicon glyphicon-remove');
	Vprenom = false;
}
	/*
	* NOM
	*/
	if (regexNom === true) 
	{
		$("#imgNom").removeClass();
		$("#imgNom").addClass('input-group-addon success');
		$("#lastRegister").removeClass();
		$("#lastRegister").addClass('glyphicon glyphicon-ok');
		VNom = true;
	}
	else
	{
		$("#imgNom").removeClass();
		$("#imgNom").addClass('input-group-addon danger');
		$("#lastRegister").addClass('glyphicon glyphicon-remove');
		VNom = false;
	}
	/*
	* CITY
	*/
	if (regexCity === true) 
	{
		$("#imgCity").removeClass();
		$("#imgCity").addClass('input-group-addon success');
		$("#cityRegister").removeClass();
		$("#cityRegister").addClass('glyphicon glyphicon-ok');
		VCity = true;
	}
	else
	{
		$("#imgCity").removeClass();
		$("#imgCity").addClass('input-group-addon danger');
		$("#cityRegister").addClass('glyphicon glyphicon-remove');
		VCity = false;
	}
	/**
	* VERIFICATION DES CHAMP
	*/
	if (Vmail === true && Vlogin === true && Vpass === true && Vprenom === true
		&& VNom === true && VCity === true)
	{
		$('#registerSubmit').prop('disabled', false);
	}
	else
	{
		$('#registerSubmit').prop('disabled', true);
	}

  });//fin gestion erreur register .php

	/*
	* AJAX ENVOIE FORMULAIRE INSCRIPTION
	*/
	$(document).on('click', '#registerSubmit', function(event)
	{
		event.preventDefault();
		$.post("app/register/C_register.php",{login:login,pass:pass,mail:mail1,prenom:prenom,nom:nom,city:city,birthday:birthday},function(data)
		{
			if (data == "true")
			{
				console.log(data);
				$("#registerInfo").append("Votre compte a bien été crée FELICITATION");
				// direHome();

			}  
			if (data == "USER")
			{
				$("#registerInfo").append("Le nom de compte ou le mail existe deja");
			}  
			console.log(data);
		});
	});

	function signIn()
	{
		login = $(".login_control").val();
		var passO = $("#singInPass").val();
		$(document).on('click', '#loginIndex', function(event)
		{
			event.preventDefault();
			$.post("app/singin/C_singIn.php",{login:$(".login_control").val(),pass:$("#singInPass").val()},function(data)
			{
				if (data == "true") 
				{
					$("#registerInfo").html("CONNEXION");
					redirectHome();
				};
				if (data == "false") 
				{
					$("#registerInfo").html("MAUVAIS PASSWORD");
				};
				console.log(data);
			})
		})
	}

	signIn();

	function Rsearch()
	{
		$(document).on("keyup","#Ajax-valSearch",function(event)
		{
			event.preventDefault()
			search = $("#Ajax-valSearch").val();
			////////////// JEUDI //////////////////////
			console.log(search)
			/*
			* Si le champ de recherche est vide, reaffiche la liste de tweet
			*/
			if (search == "")
			{
				$.ajax({
					url : 'app/tweets/V_tweet.php',
					success:function(data)
					{
						$("#Ajax-Rsearch").html(data)
						$(".Ajax-postTweet").hide();
						writeTweet()
					}
				});

			};
			/////////////////////////////////////////
			$.post("app/search/V_search.php",{search:search},function(data)
			{
				$("#Ajax-Rsearch").html(data)
			})

		})
	}

	Rsearch()

	function ReadFollow()
	{
		$(document).on("click","#Ajax-ReadFollow",function(event)
		{
			event.preventDefault()
			$.ajax({
				url : 'app/follow/V_follow.php',
				success:function(data)
				{
					$("#Ajax-Rsearch").html(data)
				}
			})
		})
	}

	ReadFollow()
	function ReadFollower()
	{
		$(document).on("click","#Ajax-ReadFollower",function(event)
		{
			event.preventDefault()
			$.ajax({
				url : 'app/follow/V_follower.php',
				success:function(data)
				{
					$("#Ajax-Rsearch").html(data)
				}
				
			})
		})
	}

	ReadFollower()

	$(".none2").hide();
	$(".inscript-infos").hide();
	function connex()
	{
		$(document).on("click","#Ajax-connexion",function(){
			$(".compte-infos").hide();
			$(".none2").show();
			$("#formRegister").hide();
			$(".inscript-infos").show();
		})

		$(document).on("click", "#inscription", function() {
			$(".compte-infos").show();
			$(".none2").hide();
			$("#formRegister").show();
			$(".inscript-infos").hide();
		})
	}
	connex();


/*
* redige un tweet, form en hide() commande situe en haut
*/
function writeTweet()
{
	$(document).on("click","#Ajax-tweet",function()
	{
		$(".Ajax-postTweet").hide();
	})
}
writeTweet()




});//READY