<?php
include("C_search.php");

foreach ($search as $key => $value) 
{
	echo $value->login;
	echo " <a href='app/follow/C_follow.php?follow=".$value->id."'>suivre</a>"."</br>";
	echo " <a href='app/message/V_message.php?idUser=".$value->id."'>message</a>"."</br>";
}

?>