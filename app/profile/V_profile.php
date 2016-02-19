<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
$id = $_GET['id'];
require_once('M_profile.php');
?>
    <!doctype html>
    <html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Tweet@cademie | <?= $profile->getField($id, 'login') ?></title>
        <script src="../../public/java/JQuery.js"></script>
        <script src="../../public/java/settings.js"></script>
        <link rel="stylesheet" type="text/css" href="../../public/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script type="text/javascript" src="../../public/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../../public/java/userTweetsProfile.js"></script>
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
    <div class="me-profil">
        <div class="perso">
            <div class="profil-img-perso">

                <!-- Afficher l'image de profil soit de celui qui est connecté si c'est son profil, sinon l'image profil de celui a qui appartient le profil -->
                <img class="img-perso" src="../../public/css/images/users/<?= $profile->getField($id, 'avatar') ?>.png" alt="img-profil"/>

            </div>
            <div class="infos-perso">
                <div class="dashboard">
                    <?php if ($_SESSION['id'] !== $_GET['id'])
                    {
                        echo '<a href="../message/V_message.php?idUser=' . $id . '" id="mess" class="btn btn-info pull-right">Message</a>
                                  <a href="../follow/C_follow.php?follow=' . $id . '" id="foll" class="btn btn-info">Follow</a>';
                    }
                    ?>
                    <div class="dashboard">
                        <span><?= $profile->getField($id, 'login') ?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="preference">
            <div class="Ajax-userTweetsProfile" data-id="<?= $id ?>"></div>
        </div>
    </div>
</div>
<?php
require_once('../../footer.php');



