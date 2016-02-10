<?php
echo $dest = $_GET["idUser"];

echo'
<form method="POST" action="C_message.php?idUser='.$dest.'">
<textarea name="content" ></textarea>
	<input type="submit">
</form>';
?>
