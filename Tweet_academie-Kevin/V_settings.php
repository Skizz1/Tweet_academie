<?php
session_start();
require_once('C_profile.php');
if (!empty($_POST['login']) && !empty($_POST['loginConfirm']))
{
    $data->changeLogin($_SESSION['id'], $_POST['login'], $_POST['loginConfirm']);
}

if (!empty($_POST['pass']) && !empty($_POST['passConfirm']))
{
    $data->changePassword($_SESSION['id'], $_POST['pass'], $_POST['passConfirm']);
}

if (!empty($_POST['mail']) && !empty($_POST['mailConfirm']))
{
    $data->changeMail($_SESSION['id'], $_POST['mail'], $_POST['mailConfirm']);
}
if(!empty($_POST['desactive'])){
    $data->desactivateProfil($_SESSION['id']);
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Settings</title>
    <script src="../../public/java/JQuery.js"></script>
    <script src="../../public/java/settings.js"></script>
    <link rel="stylesheet" type="text/css" href="../../public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="../../public/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="nav-tweet">
        <div class="container">
            <div class="navbar-header">
                <div class="deplace">
                    <div class="twitter"></div>
                    <div class="nuage2"></div>
                    <div class="nuage3"></div>
                    <a class="academie" href="index.php">Tweet@cademie</a>
                </div>
            </div>
            <form class="navbar-form navbar-left barre" method="POST" action="app/search/V_search.php">
                <div class="form-group3">
                    <input type="text" class="barre2" id="Ajax-valSearch" name="search" placeholder="Rechercher">
                    <span class="glyphicon glyphicon-search gly-search"></span>
                    <button type="button" id="logOut" class="btn btn-primary navbar-btn">
                        <span class="glyphicon glyphicon-log-out deco"> Déconnexion</span>
                    </button>
                </div>
            </form>
        </div>
    </nav>
    <div class="container">
        <div class="settings">
            <h2 id="login"><a href="#">Changer de login</a></h2>
            <form id="formLogin" method="post" action="?">
                <div class="form-group">
                    <label for="InputName"></label>
                    <div class="input-group3">
                        <input type="text" class="text-center form-control text-center JS_inputLogin" name="login" id="InputName" placeholder="login" required>
                        <span id="LoginRegister" class="input-group-addon info"><span class="glyphicon glyphicon-user" id="imageLogin"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputName"></label>
                    <div class="input-group3">
                        <input type="text" class="text-center form-control text-center JS_inputLogin" name="loginConfirm" id="InputName" placeholder="login" required>
                        <span id="LoginRegister" class="input-group-addon info"><span class="glyphicon glyphicon-user" id="imageLogin"></span></span>
                    </div>
                </div>
                <input type="submit" name="submit" id="registerSubmit" value="Envoyer" class="btn btn-info pull-right">
            </form>
            <h2 id="mail"><a href="#">Changer l'adresse mail</a></h2>
            <form id="formEmail" method="post" action="?">
                <div class="form-group">
                    <label for="InputEmail"></label>
                    <div class="input-group3">
                        <input type="email" class="form-control text-center" id="InputEmailFirst" name="mail" placeholder="Enter Email" required>
                        <span id="MailRegister1" class="input-group-addon info"><span id="imageMail1" class="glyphicon glyphicon-envelope"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail"></label>
                    <div class="input-group3">
                        <input type="email" class="form-control text-center" id="InputEmailSecond" name="mailConfirm" placeholder="Confirm Email" required>
                        <span id="MailRegister2" class="input-group-addon info"><span id="imageMail2" class="glyphicon glyphicon-envelope"></span></span>
                    </div>
                </div>
                <input type="submit" name="submit" id="registerSubmit" value="Envoyer" class="btn btn-info pull-right">
            </form>
            <h2 id="pass"><a href="#">Changer le mot de passe</a></h2>
            <form id="formPassword" method="post" action="?">
                <div class="form-group">
                    <label for="password"></label>
                    <div class="input-group3">
                        <input type="password" class="form-control text-center JS_inputPass" id="passwordFirst" name="pass" placeholder="Enter password" required>
                        <span id="PassRegister" class="input-group-addon info"><span class="glyphicon glyphicon-asterisk" id="imagePass"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Confirm password</label>
                    <div class="input-group3">
                        <input type="password" class="form-control text-center" id="passwordSecond" name="passConfirm" placeholder="Confirm password" required>
                        <span id="PassRegister2" class="input-group-addon info"><span class="glyphicon glyphicon-asterisk" id="imagePass2"></span></span>
                    </div>
                </div>
                <input type="submit" name="submit" id="registerSubmit" value="Envoyer" class="btn btn-info pull-right">
            </form>
            <h2 id="desactive"><a href="#">Désactiver le compte</a></h2>
            <form id="formDesactive" method="post" action="?">
                <input type="submit" name="desactive" id="envoyer" value="Envoyer" class="btn btn-info pull-right" onclick="return confirm('Voulez vous vraiment désactiver votre compte ?');">
            </form>

            <h2 id="image"><a href="#">Image profile</a></h2>
            <form method="post" action="C_picture.php" enctype="multipart/form-data">
                <input type="file" name="picture">
                <input type="submit">
            </form>
        </div>
    </div>
</body>
</html>