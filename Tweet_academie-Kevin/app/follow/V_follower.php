<?php
include("M_follow.php");
// $Mefollower = $Cfollow->Mefollow();

foreach ($Mefollower as $key => $value) 
{
	echo "MES FOLLOWER SONT ".$value->login."<br/>";
}
?>