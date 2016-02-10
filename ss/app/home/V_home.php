<?php
require_once("../onlineUser/sessionInit.php");
require_once("../follow/M_follow.php");
require_once("../timeLine/M_timeLine.php");
?>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Twitter</a>
            </div>
            <ul class="nav navbar-nav navbar-right">

                <form class="navbar-form navbar-left" method="POST" action="app/search/V_search.php">
                    <div class="form-group">
                        <input type="text" class="form-control" id="Ajax-valSearch" name="search" placeholder="Rechercher">
                    </div>
                    <input type="submit" id="Ajax-search" class="btn btn-primary"><span class="glyphicon glyphicon-search"/></span>
                </form>

                <!-- ======================== -->
                <!-- ID RAJOUTE logOut -->
                <li><button type="button" id="logOut" class="btn btn-primary navbar-btn"><span class="glyphicon glyphicon-log-out"></span></button></li>
                <!-- TIME LINE -->
                <li id="AjaxTimeLine"><a href="app/onlineUser/V_timeLine.php">Time line </a></li>
                <li id="AjaxTimeLine"><a href="app/onlineUser/V_timeLine.php"><?php echo $_SESSION["login"] ?> </a></li>

                <li id="AjaxTimeLine"><a href="app/follow/V_follow.php">LISTE FOLLOW</a></li>

            </ul>
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
                                <strong>1,250</strong>
                                tweets
                            </a>
                            <!-- =================================================== -->
                            <!-- ========================= ID AJOUTé ================ -->
                            <a href="#" id="Ajax-ReadFollower" class="stat cf">

                                <!-- Afficher nombre de follow du membre connecté -->
                                <?php
                                foreach ($Mefollower  as $key => $value)
                                {
                                    echo "<strong>".$value->nbrFollow."</strong>";
                                }
                                ?>
                                follower
                            </a>
                            <!-- =================================================== -->
                            <!-- ========================= ID AJOUTé ================ -->
                            <a href="#" id="Ajax-ReadFollow" class="stat">
                                <!-- Afficher nombre de followers du membre connecté -->
                                <?php
                                foreach ($CountMefollow  as $key => $value)
                                {
                                    echo "<strong>".$value->nbrFollow."</strong>";
                                }
                                ?>
                                follow
                            </a>
                        </div>
                        <ul class="menu cf">
                            <li><a href="#" class="ico-compose">Compose</a></li>
                            <li><a href="#" class="ico-mentions">Mentions</a></li>
                            <li><a href="#" class="ico-profile">Profile</a></li>
                            <li><a href="#" class="ico-settings">Settings</a></li>
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
                                echo $value->login."<br/>";
                                echo "A publie ".$value->content."<br/>";
                                echo "le ".$value->created."<br/>";
                            }
                            ?>
                            <!-- Afficher le nom prenom et texte du tweet avec max 30 caractères et des "..." après -->
                            <span ></span>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="tweet" id="Ajax-Rsearch">
                    <!-- Afficher la photo de profil du membre qui a posté le tweet -->
                    <img class="avatar-tweet" src="public/css/images/index.png" />
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
                        <img class="contenu-img" src="public/css/images/image-slider-2.jpg" />
                        <span class="glyphicon glyphicon-heart heart"></span>
                        <span class="glyphicon glyphicon-retweet retweet"></span>
                        <span class="glyphicon glyphicon-share-alt share-alt"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

