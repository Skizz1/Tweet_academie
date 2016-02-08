<?php
require("M_message.php");
class Cmessage
{
	var $exp;
	var $dest;
	var $content;
	function __construct()
	{
		$this->exp = "1";
		$this->dest = "2";
		$this->content = "SALUT JE SUIS UN TEST"; 
	}
	function sendMsg()
	{
		$SqlMessage = new SqlMessage;
		$SqlMessage->SendMessage($this->content,$this->dest,$this->exp);
	}
	function ReadMessage()
	{
		$SqlMessage = new SqlMessage;
		return $SqlMessage->ReadMessage("1","2");
	}
}


$Cmessage = new Cmessage;
$Cmessage->sendMsg();
$readMsg = $Cmessage->ReadMessage();





?>