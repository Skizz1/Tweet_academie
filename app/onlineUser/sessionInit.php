<?php
// ini_set("display_errors",0);error_reporting(0);
<<<<<<< HEAD

=======
session_start();
>>>>>>> e81ca97c7697244b0d6a382a3fd6394294d2bf85

class sessionInit
{
	var $session;
	function __construct()
	{
		$this->session = $_SESSION["login"];
	}
	function checkSession()
	{
		if (empty($this->session))
		{

		}
		else
		{
			session_start();
			$_SESSION["login"]; 
			$_SESSION["id"]; 
		}
	}
}
$sessionInit = new sessionInit;
$sessionInit->checkSession();
?>