<?php
include("C_search.php");

// var_dump($search);
switch ($search["type"])
{
	case '#':
	for($i = 0;$i < count($search) -1; $i++) 
	{
		echo $search[$i]->content;
		echo $search[$i]->id;
	}
	break;
	
	case '@':
	for($i = 0;$i < count($search) -1; $i++) 
	{
		echo $search[$i]->login;
		echo " <a href='app/follow/C_follow.php?follow=".$search[$i]->id."'>suivre</a>"."</br>";
		echo " <a href='app/message/V_message.php?idUser=".$search[$i]->id."'>message</a>"."</br>";
	}
	break;
	case '*':
		for($i = 0;$i < count($search) -1; $i++) 
	{
		echo $search[$i]->login;
		echo $search[$i]->content;
		echo " <a href='app/follow/C_follow.php?follow=".$search[$i]->id."'>suivre</a>"."</br>";
		echo " <a href='app/message/V_message.php?idUser=".$search[$i]->id."'>message</a>"."</br>";
	}
	break;



}

?>