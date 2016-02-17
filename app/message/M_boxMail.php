<?php
// session_start();
// require('../database.php');
class MboxMail
{
	function ReadMessage()
	{
		$connexion = \App\Model\Database::get()->prepare("SELECT * FROM `tp_messages` INNER JOIN tp_users on tp_users.id = tp_messages.expediteur_id   WHERE destinataire_id = '".$_SESSION["id"]."'");
		$connexion->execute();	
		$data = $connexion->fetchAll();
		return $data;
	}
}
?>