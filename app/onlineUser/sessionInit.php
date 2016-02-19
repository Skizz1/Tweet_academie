<?php
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