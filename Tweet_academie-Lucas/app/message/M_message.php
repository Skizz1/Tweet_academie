<?php
include('../database.php');
class SqlMessage
{
	function SendMessage($content,$dest,$exp)
	{
		$connexion = \App\Model\Database::get()->prepare("INSERT INTO tp_messages
			(content,destinataire_id,expediteur_id,date)
			VALUE('".$content."','".$dest."','".$exp ."',NOW()) ");
		$connexion->execute();	
	}
	function ReadMessage($dest,$exp)
	{
		$connexion = \App\Model\Database::get()->prepare("SELECT * FROM tp_messages
			INNER JOIN tp_users on tp_messages.expediteur_id = tp_users.id
			WHERE destinataire_id = '".$dest."' AND expediteur_id='".$exp."'");
		$connexion->execute();	
		$data = $connexion->fetchAll();
		return $data;
	}

}







?>