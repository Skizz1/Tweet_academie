<?php
class C_unFollow
{
	function unFollow($follow)
	{
	/*
	* Supprime une personne follow
	*/
	if(empty($follow))
	{
		return false;
	}
	$Cfollow = new Cfollow;
	$Cfollow->removeFollow($follow);
	return  $follow;
	}
}

$C_unFollow = new C_unFollow;
$C_unFollow->unFollow($_GET["idFollow"]);


?>