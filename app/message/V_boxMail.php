<?php
include("M_boxMail.php");

$MboxMail = new MboxMail;
$readMsg = $MboxMail->ReadMessage();

$Mpicture = new  Mpicture;

/*
* affichage des images dans la box mail
* implemente dans home/V_home.php
* methode : require_once
*/
foreach ($readMsg  as $key => $value) 
{

	$idExp = $value->expediteur_id;
	$img =  $Mpicture->LookPicture($idExp);
	?>
	<div class="infos-chat">
		<img class="img-chat" src="public/css/images/users/<?php echo$img ?>.png" alt="img" /> 
		<span class="name-chat"><?php echo $value->login; ?></span>
		<span value='<?php echo $idExp ?>' id='Ajax-BoxMail' class="glyphicon glyphicon-envelope envelope"></span>
	</div>
	<?php
}
?>