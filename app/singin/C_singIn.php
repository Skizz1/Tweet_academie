<?php
session_start();
include("M_singIn.php");
class CsingIn
{
	var $login;
	var $pass;

	function __construct()
	{
		$this->login = $_POST["login"];
		$this->pass = $_POST["pass"];
		$this->passH = hash("ripemd160","si tu aimes la wac tape dans tes mains" . $this->pass);
	}

	function singIn()
	{
		$userExiste = new userExiste;
		$user = $userExiste -> User($this->login,$this->passH);
		if ($user != NULL)
		{
			$_SESSION["login"] = $this->login;
			echo "true"; //AJAX;
		}
		else
		{
			echo "false"; //AJAX;
		}
	}
}

$CsingIn = new CsingIn;
$CsingIn->singIn();

?>