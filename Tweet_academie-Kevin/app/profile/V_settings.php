<?php
require_once('../session_start.php');
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
                   <a class="academie" href="../../index.php">Tweet@cademie</a>
               </div>
           </div>
           <form class="navbar-form navbar-left barre" method="POST" action="../search/V_search.php">
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
        <div class="params">
            <span class="parametre">Paramètres du compte</span>
        </div>
        <h2 id="login" class="clic">Changer votre login</h2>
        <form id="formLogin" method="post" action="?">
            <div class="form6-group">
                <label for="InputName"></label>
                <div class="input-group3">
                    <input type="text" class="form-control text-center" name="login"  placeholder="Votre pseudo">
                </div>
                <label for="InputName"></label>
                <div class="input-group3">
                    <input type="text" class="form-control text-center input-relative" name="loginConfirm" placeholder="Votre nouveau pseudo">
                </div>
                <input type="submit" name="submit" value="Confirmer" class="btn btn-info pull-right registerSubmit2">
            </div>
        </form>
        <h2 id="mail" class="clic">Changer votre adresse email</h2>
        <form id="formEmail" method="post" action="?">
            <div class="form-group6">
                <label for="InputEmail"></label>
                <div class="input-group3">
                    <input type="email" class="form-control text-center" id="InputEmailFirst" name="mail" placeholder="Entrez votre email">
                </div>
                <label for="InputEmail"></label>
                <div class="input-group3">
                    <input type="email" class="form-control text-center input-relative" id="InputEmailSecond" name="mailConfirm" placeholder="Confirmez votre email">
                </div>
                <input type="submit" name="submit" value="Confirmer" class="btn btn-info pull-right registerSubmit2">
            </div>
        </form>
        <h2 id="pass" class="clic">Changer votre mot de passe</h2>
        <form id="formPassword" method="post" action="?">
            <div class="form-group6">
                <label for="password"></label>
                <div class="input-group3">
                    <input type="password" class="form-control text-center JS_inputPass" id="passwordFirst" name="pass" placeholder="Entrez votre password">
                </div>
                <label for="password"></label>
                <div class="input-group3">
                    <input type="password" class="form-control text-center input-relative" id="passwordSecond" name="passConfirm" placeholder="Confirmez votre password">
                </div>
                <input type="submit" name="submit" value="Confirmer" class="btn btn-info pull-right registerSubmit2">
            </div>
        </form>

        <h2 id="desactive" class="clic">Désactiver votre compte</h2>
        <form id="formDesactive" method="post" action="?">
            <span>Désactiver votre compte implique que vous n'aurez plus accès à Tweet@cademie via votre login et votre mot de passe.</span> 
            <span>Soyez sur que vous vouliez clore votre compte.</span>
            <input type="submit" name="desactive" value="Confirmer" class="btn btn-info pull-right registerSubmit2" onclick="return confirm('Voulez vous vraiment désactiver votre compte ?');">
        </form>

        <h2 id="image" class="clic">Changer votre image de profil</h2>
        <form method="post" id="formImage" action="C_picture.php" enctype="multipart/form-data">
            <div class="form-group6">
                <span>L'image de profil doit être minimum de 90x90</span>
                <input type="file" name="picture">
                <input type="submit" value="Confirmer" class="btn btn-info pull-right registerSubmit2">
            </div>
        </form>
        <div class="params">
            <span class="parametre param-profil">Paramètres du profil</span>
        </div>
        <form id="formFirstName" method="post" action="?">
            <h2 id="nom" class="clic">Changer votre nom</h2>
            <div id="formNom">
                <div class="form-group6">
                    <div class="input-group3">
                        <input type="text" class="text-center form-control text-center " name="first_name" value="<?= $profile->getField($_SESSION['id'], 'first_name'); ?>">
                    </div>
                </div>
            </div>
            <h2 id="prenom" class="clic">Changer votre prénom</h2>
            <div id="formPrenom">
                <div class="form-group6">
                    <div class="input-group3">
                        <input type="text" class="text-center form-control text-center JS_inputLogin" name="last_name" value="<?= $profile->getField($_SESSION['id'], 'last_name'); ?>">
                    </div>
                </div>
            </div>
            <h2 id="postal" class="clic">Changer votre code postal</h2>
            <div id="formPostal">
                <div class="form-group6">
                    <div class="input-group3">
                        <input type="text" class="text-center form-control text-center JS_inputLogin" name="cpostal" value="<?= $profile->getField($_SESSION['id'], 'cpostal'); ?>">
                    </div>
                </div>
            </div>
            <h2 id="adress" class="clic">Changer votre adresse</h2>
            <div id="formAdress">
                <div class="form-group6">
                    <div class="input-group3">
                        <textarea name="adress"><?= $profile->getField($_SESSION['id'], 'adress'); ?></textarea>
                    </div>
                </div>
            </div>
            <h2 id="department" class="clic">Changer votre département</h2>
            <div id="formDepartment">
                <div class="form-group6">
                    <div class="input-group3">
                        <input type="text" class="text-center form-control text-center JS_inputLogin" name="departement" value="<?= $profile->getField($_SESSION['id'], 'departement'); ?>">
                    </div>
                </div>
            </div>
            <h2 id="region" class="clic">Changer votre région</h2>
            <div id="formRegion">
                <div class="form-group6">
                    <div class="input-group3">
                        <input type="text" class="text-center form-control text-center JS_inputLogin" name="region" value="<?= $profile->getField($_SESSION['id'], 'region'); ?>">
                    </div>
                </div>
            </div>
            <h2 id="city" class="clic">Changer votre ville</h2>
            <div id="formCity">
                <div class="form-group6">
                    <div class="input-group3">
                        <input type="text" class="text-center form-control text-center JS_inputLogin" name="city" value="<?= $profile->getField($_SESSION['id'], 'city'); ?>">
                    </div>
                </div>
            </div>
            <h2 id="country" class="clic">Changer votre pays</h2>
            <div id="formCountry">
                <div class="form-group6">
                    <div class="input-group3">
                        <input type="text" class="text-center form-control text-center JS_inputLogin" name="country" value="<?= $profile->getField($_SESSION['id'], 'country'); ?>">
                    </div>
                </div>
            </div>
            <h2 id="anniv" class="clic">Changer la date de votre anniversaire</h2>
            <div id="formAnniv">
                <div class="form-group6">
                    <div class="input-group3">
                        <input type="date" class="text-center form-control text-center JS_inputLogin" name="birthday" value="<?= $profile->getField($_SESSION['id'], 'birthday'); ?>">
                    </div>
                </div>
            </div>
            <input type="submit" name="submit" id="registerSubmit" value="Envoyer" class="btn btn-info pull-right">
        </form>
    </div>
</div>

<!-- Lien vers JS -->
<script src="../../public/java/JQuery.js"></script>
<script src="../../public/java/java.js"></script>
<?php

$data->changeProfile($_SESSION['id']);

include('../../footer.php');
?>