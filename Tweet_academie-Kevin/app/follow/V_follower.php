<?php
include("M_follow.php");
$Cfollow = new Cfollow;
$Mefollower = $Cfollow->Mefollower();


foreach ($Mefollower as $key => $value) 
{
	echo "MES FOLLOWER SONT ".$value->login."<br/>";
}
?>