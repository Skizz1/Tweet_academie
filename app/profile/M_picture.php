<?php
class Mpicture
{
	function Upload($picture,$type)
	{
		session_start();
		// move_uploaded_file($picture,"../../public/css/images/users/".$_SESSION["id"].".".$type);
		move_uploaded_file($picture,"../../public/css/images/users/".$_SESSION["id"].".png");

	}
	function LookPicture($user)
	{
		if(file_exists("../../public/css/images/users/".$user.".png"))
		{
			return  $user;
		}
		else
		{
			return 'AVATAR';
		}
	}
}
?>