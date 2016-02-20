<?php

class sessionInit
{
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