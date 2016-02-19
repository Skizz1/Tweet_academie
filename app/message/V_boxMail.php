<?php
include("M_boxMail.php");
$MboxMail = new MboxMail;
$readMsg = $MboxMail->ReadMessage();
echo "Boit mail";
;
echo $_SESSION["id"];
echo $_SESSION["login"];

foreach ($readMsg  as $key => $value) 
{
	echo $value->content;
	echo $value->login;
}

?>
