<?php
include("M_singIn.php");
class CsingIn
{
	var $login;
	var $pass;

	function __construct()
	{
		$this->login = $_POST["login"];
		$this->pass = $_POST["pass"];
	}

	function singIn()
	{
		$userExiste = new userExiste;
		$userExiste -> User($this->login,$this->pass);
	}
}

$CsingIn = new CsingIn;
$CsingIn->singIn();

?>