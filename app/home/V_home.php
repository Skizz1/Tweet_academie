    <?php
    ini_set('display_errors', 'on');
    error_reporting(E_ALL);
    require_once("../onlineUser/sessionInit.php");
    require_once("../follow/M_count.php");
    require_once("../timeLine/M_timeLine.php");
    require_once("../tweets/M_tweets.php");
    $tweetCount = $tweets->tweetCount($_SESSION['id']);

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
                    <button type="button" id="logOut" class="btn btn-primary navbar-btn">
                        <span class="glyphicon glyphicon-log-out deco"> Déconnexion</span>
                    </button>
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
                            <?php 
                            require("../profile/V_picture.php");
                            ?>
                            <!-- Afficher le login du membre connecté -->
                            <h2><?php echo $_SESSION["login"] ?></h2>
                        </div>
                        <div class="stats cf">
                              <a href="#" class="stat" id="Ajax-tweetCount">
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
                            <!-- Lien mail -->
                            <li><a href="app/profile/V_settings.php" class="ico-settings">Settings</a></li>
                        </ul>
                    </div>
                    <div id="Ajax-postTweet">
                        <form id="Ajax-postTweet" method="POST" action="app/tweets/C_tweets.php">
                            <textarea id="contentTweet" placeholder="Exprimez-vous" name="content"></textarea>
                            <input id="Ajax-post" type="submit">
                        </form>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="tweet" id="Ajax-Rsearch">

                    <!-- TIME LINE AJAX  -->
                    <div class="tweet" id="Ajax-TimeLine"></div>
                </div>
            </div>
            <div class="chat">+</div>
            <!-- LISTE DES MESSAGES -->
            <div class="view-message">
                <div class="user-chat">
                    <?php
                /*
                * apelle de la function de listing des mails
                */
                require_once("../message/V_boxMail.php");
                ?>
            </div>
            <div class="new-message"></div>
        </div>  
        <div class="dialogue"></div>
    </div>
</div>