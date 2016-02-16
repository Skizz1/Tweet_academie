<?php
include('../database.php');
class SqlMessage
{
	function SendMessage($content,$dest,$exp)
	{
		$connexion = \App\Model\Database::get()->prepare("INSERT INTO tp_messages
			(content,destinataire_id,expediteur_id,message_date)
			VALUE('".$content."','".$dest."','".$exp ."',NOW()) ");
		var_dump($connexion);
		$connexion->execute();	
	}
}

?>