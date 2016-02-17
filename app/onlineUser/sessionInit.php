<?php
// ini_set("display_errors",0);error_reporting(0);
session_start();

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
			$_SESSION["login"]; 
			$_SESSION["id"]; 
		}
	}
}
$sessionInit = new sessionInit;
$sessionInit->checkSession();
?>