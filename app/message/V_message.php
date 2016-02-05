<?php
require("C_message.php");
foreach ($readMsg as $key => $value)
 {
	echo $value->content;
	echo $value->login;
}




?>