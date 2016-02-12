<?php
require_once("../onlineUser/sessionInit.php");
require_once("../follow/M_follow.php");
require_once("../timeLine/M_timeLine.php");
require_once("../tweets/M_tweets.php");
?>
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
            </div>
        </form>
    </div>
</nav>
<div class="container1">
    <div class="accueil">
        <div class="left">
            <div class="infos">
                <div class="twitter-widget">
                    <div class="header cf">
                        <!-- Afficher la photo de profil du membre connecté -->
                        <img class="avatar" src="public/css/images/index.png" alt="Profil">
                        <!-- Afficher le login du membre connecté -->
                        <h2><?php echo $_SESSION["login"] ?></h2>
                    </div>
                    <div class="stats cf">
                        <a href="#" class="stat">
                            <!-- Afficher nombre de tweets du membre connecté -->
                            <?php foreach ($tweetCount as $value)
                            {
                                echo "<strong>" . $value->tweets . "</strong>";
                            }
                            ?>
                            tweets
                        </a>
                        <a href="#" id="Ajax-ReadFollower" class="stat cf">

                            <!-- Afficher nombre de follow du membre connecté -->
                            <?php
                            foreach ($Mefollower as $value)
                            {
                                echo "<strong>" . $value->nbrFollow . "</strong>";
                            }
                            ?>
                            follower
                        </a>
                        <a href="#" id="Ajax-ReadFollow" class="stat">
                            <!-- Afficher nombre de followers du membre connecté -->
                            <?php
                            foreach ($CountMefollow as $value)
                            {
                                echo "<strong>" . $value->nbrFollow . "</strong>";
                            }
                            ?>
                            follow
                        </a>
                    </div>
                    <ul class="menu cf">
                        <li><a href="#" id="Ajax-tweet" class="ico-compose">Compose</a></li>
                        <li><a href="#" class="ico-mentions">Mentions</a></li>
                        <li><a href="app/profile/V_profile.php" class="ico-profile">Profil</a></li>
                        <li><a href="app/profile/V_settings.php" class="ico-settings">Settings</a></li>
                    </ul>
                </div>
            </div>
            <div class="actualite">
                <!-- Afficher les actualités récentes des gens Follows par le membre connecté -->
                <div class="infos">
                    <div class="twitter-widget1">
                        <div class="stats cf actu">
                            <span>Actualités récentes</span>
                        </div>
                        <?php
                        foreach ($timeLine as $key => $value)
                        {
                            echo $value->login . "<br/>";
                            echo "A publie " . $value->content . "<br/>";
                            echo "le " . $value->created . "<br/>";
                        }
                        ?>
                        <!-- Afficher le nom prenom et texte du tweet avec max 30 caractères et des "..." après -->
                    </div>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="tweet" id="Ajax-Rsearch">
                <!-- Afficher la photo de profil du membre qui a posté le tweet -->

                <div id="Ajax-postTweet">
                	<form>
                		<textarea placeholder="Exprimez-vous" name="message"></textarea>
                	</form>
                    <div class="area">
                        <span class="glyphicon glyphicon-share-alt photo"><span class="camera">Tweeter</span></span>
                        <span class="glyphicon glyphicon-camera photo"><span class="camera">Photo</span></span>
                    </div>
                </div>
                <img class="avatar-tweet" src="public/css/images/index.png" alt="zozio" />
                <div class="contenu">
                    <!-- Afficher son login/prénom nom -->
                    <h4>Loïc De Stefano</h4><span class="compte-admin">✔</span>
                    <!-- Afficher l'heure a laquelle à été poster le tweet -->
                    <p>10h</p>
                    <!-- Afficher le @ du membre qui a posté le tweet -->
                    <h5>@loicdsfn</h5>
                    <!-- Afficher le contenu du tweet ainsi que le @ d'un/des membres notifiés et du/des # mentionnés -->
                    <span class="content">Tweet d'expo pour visuel d'implementation du php de <a href="#">@sauvan_k</a> ;) <a href="">#CSSdeOUFFFF</a></span>
                    <!-- Afficher image ou vidéo si jamais il y en a -->
                    <img class="contenu-img" src="public/css/images/image-slider-2.jpg" alt="ballon" />
                    <div class="icon-boot">
                        <span class="glyphicon glyphicon-heart heart"></span>
                        <span class="glyphicon glyphicon-retweet retweet"></span>
                        <span class="glyphicon glyphicon-share-alt share-alt"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

