<?php
error_reporting(E_ALL);
class Mpicture
{
	function Upload($picture,$type)
	{
		session_start();
		move_uploaded_file($picture,"../../public/css/images/users/".$_SESSION["id"].".png");
	}

	/*
	* Permet l'affichage de toute les images des utilisateurs du site /!\ important /!\
	* strubi ne modifie pas cette function
	*/
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