<?php
echo $dest = $_GET["idUser"];

echo'
<form method="GET" action="C_message.php">
<textarea name="content" ></textarea>
<input type="text"name="idUser" value="'.$dest.'">
	<input type="submit">
</form>';
 ?>
