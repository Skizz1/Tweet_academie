<?php
session_start();
require_once('C_profile.php');
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Tweet@cademie | Profil</title>
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
    <div class="me-profil">
        <div class="perso">
            <div class="profil-img-perso">

                <!-- Afficher l'image de profil soit de celui qui est connecté si c'est son profil, sinon l'image profil de celui a qui appartient le profil -->
                <img class="img-perso" src="../../chat-1.jpg" alt="img-profil" />

            </div>
            <div class="infos-perso">
                <div class="dashboard">
                    <form method="post" action="?">

                        <!-- Renvoi sur la timeline avec la messarie ouverte -->
                        <input id="mess" type="submit" name="messagerie" value="Message" class="btn btn-info pull-right">

                        <!-- Follow la personne en question -->
                        <input id="foll" type="submit" name="follow" value="Follow" class="btn btn-info">

                    </form>
                    <div class="dashboard">
                        <span>Loïc De Stefano</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="preference">
            <div class="profil-infos-tweet">

                <!-- Afficher les tweets du profil visiter par rapport a son ID   (chemin pour les images des users public/css/images/users/)-->

                <img class="avatar-tweet" src="../../chat-1.jpg" alt="img-profil"/>

                <div class="contenu">

                    <!-- Afficher son login/prénom nom -->
                    <h4>Loïc De Stefano</h4>

                    <!-- Afficher l'heure ou le tweet à été posté -->
                    <p>10h</p>

                    <span class="content">Pouet pouet je suis le contenu du tweet ! :D</span>
                    <hr class="hr"/>
                </div>
            </div>

            <div class="profil-infos-tweet">

                <!-- Afficher les tweets du profil visiter par rapport a son ID   (chemin pour les images des users public/css/images/users/)-->

                <img class="avatar-tweet" src="../../chat-1.jpg" alt="img-profil"/>

                <div class="contenu">

                    <!-- Afficher son login/prénom nom -->
                    <h4>Loïc De Stefano</h4>

                    <!-- Afficher l'heure ou le tweet à été posté -->
                    <p>10h</p>

                    <span class="content">Pouet pouet je suis le contenu du tweet ! :D</span>
                    <hr class="hr"/>
                </div>
            </div>
        </div> 
    </div>
</div>

</body>
<?php
require_once('../../footer.php');