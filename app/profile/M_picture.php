<?php
class Mpicture
{
	function Upload($picture,$type)
	{
		session_start();
		move_uploaded_file($picture,"../../public/css/images/users/".$_SESSION["id"].".".$type);
	}
	function LookPicture()
	{
		if(file_exists("../../public/css/images/users/".$_SESSION["id"].".png"))
		{
			echo '<img class="avatar" src="public/css/images/users/'.$_SESSION["id"].'.png" alt="Profil">';
		}
		else if(file_exists("../../public/css/images/users/".$_SESSION["id"].".jpg") )
		{
			echo '<img class="avatar" src="public/css/images/users/'.$_SESSION["id"].'.jpg" alt="Profil">';
		}
		else
		{
			echo '<img class="avatar" src="public/css/images/users/AVATAR.png" alt="Profil">';
		}
	}
}
?>