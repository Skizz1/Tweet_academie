<?php
include('../database.php');
class SqlMessage
{
	function SendMessage($content,$exp,$dest)
	{
		$connexion = \App\Model\Database::get()->prepare("INSERT INTO tp_messages
			(content,destinataire_id,expediteur_id,message_date)
			VALUE('".$content."','".$exp."','".$dest ."',NOW()) ");
	
		$connexion->execute();	
	}
}

?>