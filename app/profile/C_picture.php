<?php
error_reporting(E_ALL);
require("M_picture.php");
class Picture
{
/*
* Change l'image
*/
var $type;
function __construct()
{
	$this->type = getimagesize($_FILES['picture']['tmp_name']);
}
public function picture()
{


	if ($this->type["mime"] == "image/png" || $this->type["mime"] == "image/jpeg")
	{
		/*
		* Permet de recuperer l'extention de l'image
		*/
		$type = substr($this->type["mime"], -3);
		$Mpicture = new Mpicture;
		$upload = $Mpicture->Upload($_FILES['picture']['tmp_name'],$type);
		echo "le telechargemnt est bon";
	}

	else
	{
		echo "Le format est incorrect seulement des png ou jpg, merci";
		return false;
	}
}

}
$Picture = new Picture;
$Picture->picture();

?>