<?php
// session_start();
require_once('../database.php');
class MboxMail
{
	function ReadMessage()
	{
		$connexion = \App\Model\Database::get()->prepare("SELECT * FROM `tp_messages` INNER JOIN tp_users on tp_users.id = tp_messages.expediteur_id   WHERE destinataire_id = '".$_SESSION["id"]."'");
		$connexion->execute();	
		$data = $connexion->fetchAll();
		return $data;
	}
		function boxMail($id)
	{
		session_start();
		$connexion = \App\Model\Database::get()->prepare("
			SELECT * FROM `tp_messages`
		 	INNER JOIN tp_users
		 	ON tp_users.id = tp_messages.expediteur_id
		   	WHERE destinataire_id = '".$id."'
		   	AND expediteur_id = '".$_SESSION["id"]."'
			OR expediteur_id = '".$id."'
			AND destinataire_id = '".$_SESSION["id"]."'");
		$connexion->execute();	
		$data = $connexion->fetchAll();
		return $data;
	}

}
?>