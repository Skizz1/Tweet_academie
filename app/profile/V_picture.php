<?php
require_once("M_picture.php");
$Mpicture = new Mpicture;
$pict = $Mpicture->LookPicture($_SESSION["id"]);
echo '<img class="avatar" src="public/css/images/users/'.$pict.'.png" alt="Profil">';
?>