<?php
/*
* chat de conversation prive
* (messagerie)
* inclue dans home/v_home
* methode : java,php
*/
require_once("M_boxMail.php");
require_once("../profile/M_picture.php");

$MboxMail = new MboxMail;
$Mpicture = new Mpicture;
// var_dump($box = $MboxMail->ReadMessage());
$box = $MboxMail->ReadMessage();

foreach ($box as $key => $value)
{
	$exp = $Mpicture->LookPicture($value->expediteur_id);
	?>
	<img alt="message user image" src="public/css/images/users/<?php echo $exp?>.png" class="direct-chat-img">
	<!-- contenue du mail -->
	<div class="direct-chat-text">
	<?php echo $value->content; ?>
	</div>
	<div class="direct-chat-info clearfix">
		<span class="direct-chat-timestamp pull-right">00h20</span>
	</div>



	<?php
}
?>
