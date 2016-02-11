<?php
require_once("../onlineUser/sessionInit.php");
require_once("../follow/M_follow.php");
require_once("../timeLine/M_timeLine.php");
require_once("../tweets/M_tweets.php");

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
                <li>
                    <!-- ================================================================ -->
                    <!-- RAJOUT MAIL -->
                    <!-- ================================================================ -->
                    <a href="app/message/V_boxMail.php">MAIL</a>
                    <button type="button" id="logOut" class="btn btn-primary navbar-btn"><span class="glyphicon glyphicon-log-out"></span></button>
                </li>
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
                            <!-- AJOUT ID Ajax-Tweet ///////////////////////////////////-->
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
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="tweet" id="Ajax-Rsearch">



                    <!-- AJOUT TWEET MERCREDI -->


                    <!-- //////////////////////////////////////// -->
                    <div class="contenu">
                    <?php 
                        require("../tweets/V_tweet.php");
                    ?>
                    </div>
                   <!-- TIME LINE -->



                </div>
            </div>
        </div>
    </div>

