<?php
include("M_follow.php");
$Mefollow = $Cfollow->Mefollow();


foreach ($Mefollow as $key => $value) 
{
	echo "LES PERSONNE QUE JE SUIS SONT ".$value->login."<br/>";
}


?>