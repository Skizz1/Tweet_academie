<?php
include("M_follow.php");
$Mefollow = $Cfollow->Mefollow();

foreach ($Mefollower as $key => $value) 
{
	echo "MES FOLLOWER SONT ".$value->login."<br/>";
}


foreach ($Mefollow as $key => $value) 
{
	echo "LES PERSONNE QUE JE SUIS SONT ".$value->login."<br/>";
}


?>