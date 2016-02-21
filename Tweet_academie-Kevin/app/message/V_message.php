<link rel="stylesheet" type="text/css" href="../../public/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../../public/css/style.css">
<meta charset="UTF-8">
<?php
echo $dest = $_GET["idUser"];

echo'
<div class="container">
	<div class="first-message">
		<p class="mp-mess">Envoyez votre premier message privé à votre correspondant en toute sécurité !</p>
		<p class="rem-mess">Pour vos prochain message privé, vous aurez accès à une messagerie instantanée via la page home de notre site.</p>
		<form method="GET" action="C_message.php">
			<textarea name="content" class="contentTweet" placeholder="Ecrivez votre message prive ici..."></textarea>
			<input class="cache-cache" type="text"name="idUser" value="'.$dest.'">
			<input class="Ajax-post" type="submit" value="Envoyez">
		</form>
	</div>
</div>';
?>
