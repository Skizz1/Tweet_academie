<?php
require_once("M_follow.php");
class Rfollow
{

/*
* RAJOUTE UNE PERSONNE A SUIVRE
*/
	function addFollow($follow)
	{
		if(empty($follow))
		{
			return false;
		}
		echo $follow;
		$Cfollow = new Cfollow;
		$Cfollow->addFollowSQL($follow);
	}
}

$Rfollow = new Rfollow();
$Rfollow->addFollow($_GET["follow"]);
?>
