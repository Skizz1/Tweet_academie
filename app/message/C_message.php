<?php
require_once('../session_start.php');
require("M_message.php");
class Cmessage
{
	var $exp;
	var $dest;
	var $content;
	function __construct()
	{
		$this->exp = $_GET["idUser"];
		$this->dest = $_SESSION["id"];
		$this->content = $_GET["content"]; 
	}
		function sendMsg()
	{
		$SqlMessage = new SqlMessage;
		$SqlMessage->SendMessage($this->content,$this->dest,$this->exp);
	}
}	
$Cmessage = new Cmessage;
$Cmessage->sendMsg();

?>