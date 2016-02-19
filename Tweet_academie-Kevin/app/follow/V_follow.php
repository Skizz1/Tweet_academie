<?php
include("M_follow.php");
$Cfollow = new Cfollow; 
$Mefollow = $Cfollow->Mefollow();


foreach ($Mefollow as $key => $value) 
{
	echo "LES PERSONNE QUE JE SUIS SONT ".$value->login."<br/>";
}


?>