<!DOCTYPE html>
<html>
<head>
	<title>Tweet@cademie</title>
	<link rel="stylesheet" type="text/css" href="../../public/bootstrap/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../public/css/style.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="../../public/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="row">
		<div class="col-md-3">
			<div class="popup-box chat-popup" id="qnimate">
				<div class="popup-head">
					<div class="popup-head-left pull-left">
						<img src="../../public/css/images/index.png" alt="iamgurdeeposahan">
						<span class="user">Loïc De Stefano</span>
					</div>
					<div class="popup-head-right pull-right">
						<button data-widget="remove" id="removeClass" class="chat-header-button pull-right" type="button">
							<i class="glyphicon glyphicon-off"></i>
						</button>
					</div>
				</div>
				<div class="popup-messages">
					<div class="direct-chat-messages">
						<div class="chat-box-single-line">
							<abbr class="timestamp">11 Février 2016</abbr>
						</div>
						<div class="direct-chat-msg doted-border">
							<div class="direct-chat-info clearfix">
								<span class="direct-chat-name pull-left">Osahan</span>
							</div>
							<img alt="message user image" src="../../public/css/images/index.png" class="direct-chat-img"><!-- /.direct-chat-img -->
							<div class="direct-chat-text">
								Hey sauvan, ça va ?
							</div>
							<div class="direct-chat-info clearfix">
								<span class="direct-chat-timestamp pull-right">00h20</span>
							</div>
						</div>
						<div class="direct-chat-msg doted-border">
							<div class="direct-chat-info clearfix">
								<span class="direct-chat-name pull-left">Osahan</span>
							</div>
							<img alt="message user image" src="../../public/css/images/index.png" class="direct-chat-img"><!-- /.direct-chat-img -->
							<div class="direct-chat-text">
								Prêt pour l'implementation ? ;)
							</div>
							<div class="direct-chat-info clearfix">
								<span class="direct-chat-timestamp pull-right">00h21</span>
							</div>
						</div>
						<div class="chat-box-single-line">
							<abbr class="timestamp">12 Février 2016</abbr>
						</div>
						<div class="direct-chat-msg doted-border">
							<div class="direct-chat-info clearfix">
								<span class="direct-chat-name pull-left">Osahan</span>
							</div>
							<img alt="message user image" src="../../public/css/images/image-slider-2.jpg" class="direct-chat-img"><!-- /.direct-chat-img -->
							<div class="direct-chat-text">
								Oui, je fais ça de suite ^^
							</div>
							<div class="direct-chat-info clearfix">
								<span class="direct-chat-timestamp pull-right">09h20</span>
							</div>
						</div>
					</div>
				</div>
				<div class="popup-messages-footer">
					<textarea id="status_message" placeholder="Ecrivez votre message..." rows="10" cols="40" name="message"></textarea>
					<div class="btn-footer">
						<button class="bg_none pull-right">Envoyer <i class="glyphicon glyphicon-thumbs-up"></i></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--<?php
	// echo $dest = $_GET["idUser"];

	// echo'
	// <form method="POST" action="C_message.php?idUser='.$dest.'">
	// <textarea name="content" ></textarea>
	// <input type="submit">
	// </form>';
	?>-->
</body>
</html>