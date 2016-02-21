$(document).ready(function () {
    var login,
        regexLogin;
    var pass;
    var pass1;
    var pass2;
    var regexPass;
    var mail1;
    var mail2;
    var regexmail;
    var prenom;
    var regexPrenom;
    var nom;
    var regexNom;
    var city;
    var regexCity;
    var Vlogin;
    var Vpass;
    var Vmail;
    var Vprenom;
    var VNom;
    var VCity;
    var birthday;

    $('.datepicker').datepicker({dateFormat: 'yy-mm-dd'});

    $('#registerSubmit').prop('disabled', true);
    function redirectHome() {
        $.ajax
        ({
            url: "app/home/V_home.php",
            success: function (e) {
                $("body").html(e);
                /*
                 * Permet de cache le texte area des tweets
                 */
                function messagerie() {
                    $(".Ajax-postTweet").hide();
                    $('.view-message').hide();
                    $(document).on("click", ".chat", function () {
                        if ($('.view-message').is(':hidden')) {
                            $(this).css({"left": '75.6%', "animation": 'bulle 0.5s linear'});
                            $('.view-message').show().css({"position": 'fixed', "left": '80.8%', "animation": 'surf 0.5s linear'});
                        } else {
                            $(this).css({"left": '93%'});
                            $('.view-message').hide().css({"left": '100%'});
                        }

                    });


                }

                messagerie();

                $(document).on("click", "#Ajax-BoxMail", function () {
                    user = $(this).data("user");

                    setInterval(function () {
                        $.post("app/message/V_boxChat.php", {user: user}, function (data) {
                            $(".dialogue").html(data);
                        });

                    }, 10000);

                    $.post("app/message/V_boxChat.php", {user: user}, function (data) {
                        $(".dialogue").html(data);
                    });
                });


                $('.dialogue').css({"display": 'none'});

                /*
                 * permet l'affiche de la mail box
                 * home/home.php
                 * methode java
                 */
                $(document).on("click", ".envelope", function () {
                    $('.dialogue').css({"display": 'block'});
                });

                $(document).on("click", ".off", function () {
                    if ($('.popup-messages').is(':visible')) {
                        $('.dialogue').css({"position": 'fixed', "top": '915px'});
                        $('.popup-messages').css({"position": 'fixed', "display": 'none'});
                        $('.popup-messages-footer').css({"position": 'fixed', "display": 'none'});
                    }
                    else {
                        $('.dialogue').css({"position": 'fixed', "top": '540px'});
                        $('.popup-messages').css({"display": 'block', "width": '22%'});
                        $('.popup-messages-footer').css({"display": 'block', "width": '22%'});
                    }
                });
            }
        });
    }

    function logOut() {
        $(document).on("click", "#logOut", function () {
            $.ajax({
                url: 'app/onlineUser/C_disconect.php',
                success: function (data) {
                    window.location.replace("index.php");
                }

            });
        });
    }
    logOut();
 

    $(document).on('keyup', '#formRegister input', function () {
        //Verification login
        login = $(".JS_inputLogin").val();
        regexLogin = /^[a-zA-Z]+$/.test(login);

        pass = $(".JS_inputPass").val();
        pass1 = $("#passwordFirst").val();
        pass2 = $("#passwordSecond").val();
        /*Minimum 8 characters  1 Alphabet and 1 Number*/
        regexPass = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/.test(pass);

        mail1 = $("#InputEmailFirst").val();
        mail2 = $("#InputEmailSecond").val();
        regexmail = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/.test(mail1);

        prenom = $("#inputPrenom").val();
        regexPrenom = /^[a-zA-Z]+$/.test(prenom);

        nom = $("#inputNom").val();
        regexNom = /^[a-zA-Z]+$/.test(nom);

        city = $("#inputCity").val();
        regexCity = /^[a-zA-Z]+$/.test(city);

        birthday = $("#inputAniv").val();
        
        var $l = $("#InputName");
        var $p = $("#inputPrenom");
        var $n = $("#inputNom");
        var $a = $("#inputAniv");
        var $ef = $("#InputEmailFirst");
        var $es = $("#InputEmailSecond");
        var $pf = $("#passwordFirst");
        var $ps = $("#passwordSecond");
        var $c = $("#inputCity");
        $(".authentification").show();
        $("#registerInfo").hide();
        
        if (!$l.val()) {
            $("#LoginRegister").removeClass();
            $("#LoginRegister").addClass("input-group-addon info");
            $("#imageLogin").removeClass();
            $("#imageLogin").addClass("glyphicon glyphicon-user");
        }
        else if (regexLogin) {
            $("#LoginRegister").removeClass();
            $("#LoginRegister").addClass('input-group-addon success');
            $("#imageLogin").removeClass();
            $("#imageLogin").addClass('glyphicon glyphicon-ok');
            Vlogin = true;
        }
        else if (this != regexLogin) {
            $(".authentification").hide();
            $("#registerInfo").show();
            $("#LoginRegister").removeClass();
            $("#LoginRegister").addClass('input-group-addon danger');
            $("#imageLogin").addClass('glyphicon glyphicon-remove');
            $("<p>" + "* Votre pseudo doit contenir que des caractères alphanumériques" + "</p>").appendTo("#registerInfo");
            Vlogin = false;
        }
        /*
         * PASSWORD
         */

        if (!$pf.val() || !$ps.val()) {
            $("#PassRegister").removeClass();
            $("#PassRegister").addClass("input-group-addon info");
            $("#imagePass").removeClass();
            $("#imagePass").addClass("glyphicon glyphicon-asterisk");
            $("#PassRegister2").removeClass();
            $("#PassRegister2").addClass("input-group-addon info");
            $("#imagePass2").removeClass();
            $("#imagePass2").addClass("glyphicon glyphicon-asterisk");
        }
        else if (regexPass === true && pass1 == pass2) {
            $("#imagePass").removeClass();
            $("#imagePass").addClass('glyphicon glyphicon-ok');
            $("#imagePass2").removeClass();
            $("#imagePass2").addClass('glyphicon glyphicon-ok');
            $("#PassRegister").removeClass();
            $("#PassRegister").addClass('input-group-addon success');
            $("#PassRegister2").removeClass();
            $("#PassRegister2").addClass('input-group-addon success');
            Vpass = true;
        }
        else if (this != regexPass) {
            $(".authentification").hide();
            $("#registerInfo").show();
            $("#imagePass").removeClass();
            $("#imagePass").addClass('glyphicon glyphicon-remove');
            $("#imagePass2").removeClass();
            $("#imagePass2").addClass('glyphicon glyphicon-remove');
            $("#PassRegister").removeClass();
            $("#PassRegister").addClass('input-group-addon danger');
            $("#PassRegister2").removeClass();
            $("#PassRegister2").addClass('input-group-addon danger');
            $("<p>" + "* Votre mot de passe doit contenir 8 caractères alphanumériques et 1 chiffre" + "</p>").appendTo("#registerInfo");
            Vpass = false;
        }

        /*
         *EMAIL
         */

        if (!$ef.val() || !$es.val()) {
            $("#MailRegister1").removeClass();
            $("#MailRegister1").addClass("input-group-addon info");
            $("#imageMail1").removeClass();
            $("#imageMail1").addClass("glyphicon glyphicon-asterisk");
            $("#MailRegister2").removeClass();
            $("#MailRegister2").addClass("input-group-addon info");
            $("#imageMail2").removeClass();
            $("#imageMail2").addClass("glyphicon glyphicon-envelope");
        }
        else if (regexmail === true && mail1 == mail2) {

            $("#imageMail1").removeClass();
            $("#imageMail2").removeClass();

            $("#imageMail1").addClass('glyphicon glyphicon-ok');
            $("#imageMail2").addClass('glyphicon glyphicon-ok');

            $("#MailRegister2").removeClass();
            $("#MailRegister2").addClass('input-group-addon success');

            $("#MailRegister1").removeClass();
            $("#MailRegister1").addClass('input-group-addon success');
            Vmail = true;
        }
        else if (this != regexmail) {
            $(".authentification").hide();
            $("#registerInfo").show();
            $("#MailRegister1").removeClass();
            $("#MailRegister1").addClass('input-group-addon danger');
            $("#MailRegister2").removeClass();
            $("#MailRegister2").addClass('input-group-addon danger');
            $("#imageMail1").addClass('glyphicon glyphicon-remove');
            $("#imageMail2").addClass('glyphicon glyphicon-remove');
            $("<p>" + "* Vos emails doivent être strictements identiques" + "</p>").appendTo("#registerInfo");
            Vmail = false;
        }

        /*
         * PRENOM
         */
        if (!$p.val()) {
            $("#imgPrenom").removeClass();
            $("#imgPrenom").addClass("input-group-addon info");
            $("#firstRegister").removeClass();
            $("#firstRegister").addClass("glyphicon glyphicon-user");
        }
        else if (regexPrenom === true) {
            $("#imgPrenom").removeClass();
            $("#imgPrenom").addClass('input-group-addon success');
            $("#firstRegister").removeClass();
            $("#firstRegister").addClass('glyphicon glyphicon-ok');
            Vprenom = true;
        }
        else if (this != regexPrenom) {
            $(".authentification").hide();
            $("#registerInfo").show();
            $("#imgPrenom").removeClass();
            $("#imgPrenom").addClass('input-group-addon danger');
            $("#firstRegister").addClass('glyphicon glyphicon-remove');
            $("<p>" + "* Votre prénom ne doit pas contenir de caractères spéciaux" + "</p>").appendTo("#registerInfo");
            Vprenom = false;
        }
        /*
         * NOM
         */
        if (!$n.val()) {
            $("#imgNom").removeClass();
            $("#imgNom").addClass("input-group-addon info");
            $("#lastRegister").removeClass();
            $("#lastRegister").addClass("glyphicon glyphicon-user");
        }
        else if (regexNom === true) {
            $("#imgNom").removeClass();
            $("#imgNom").addClass('input-group-addon success');
            $("#lastRegister").removeClass();
            $("#lastRegister").addClass('glyphicon glyphicon-ok');
            VNom = true;
        }
        else if (this != regexNom) {
            $(".authentification").hide();
            $("#registerInfo").show();
            $("#imgNom").removeClass();
            $("#imgNom").addClass('input-group-addon danger');
            $("#lastRegister").addClass('glyphicon glyphicon-remove');
            $("<p>" + "* Votre nom ne doit pas contenir de caractères spéciaux" + "</p>").appendTo("#registerInfo");
            VNom = false;
        }
        /*
         * CITY
         */
        if (!$c.val()) {
            $("#imgCity").removeClass();
            $("#imgCity").addClass("input-group-addon info");
            $("#cityRegister").removeClass();
            $("#cityRegister").addClass("glyphicon glyphicon-home");
        }
        else if (regexCity === true) {
            $("#imgCity").removeClass();
            $("#imgCity").addClass('input-group-addon success');
            $("#cityRegister").removeClass();
            $("#cityRegister").addClass('glyphicon glyphicon-ok');
            VCity = true;
        }
        else if (this != regexCity) {
            $(".authentification").hide();
            $("#registerInfo").show();
            $("#imgCity").removeClass();
            $("#imgCity").addClass('input-group-addon danger');
            $("#cityRegister").addClass('glyphicon glyphicon-remove');
            $("<p>" + "* Le champ 'ville' n'a pas été remplit" + "</p>").appendTo("#registerInfo");
            VCity = false;
        }
        /**
         * VERIFICATION DES CHAMP
         */
        if (Vmail === true && Vlogin === true && Vpass === true && Vprenom === true
            && VNom === true && VCity === true) {
            $('#registerSubmit').prop('disabled', false);
        }
        else {
            $('#registerSubmit').prop('disabled', true);
        }
    });//fin gestion erreur register .php

    /*
     * AJAX ENVOIE FORMULAIRE INSCRIPTION
     */
    $(document).on('click', '#registerSubmit', function (event) {
        event.preventDefault();
        $(".authentification").show();
        $("#validationInfo").hide();
        $("#echecInfo").hide();
        $.post("app/register/C_register.php", {login: login, pass: pass, mail: mail1, prenom: prenom, nom: nom, city: city, birthday: birthday}, function (data) {
            if (data == "true") {
                $(".authentification").hide();
                $("#validationInfo").show();
                $("#validationInfo").append("Félicitation ! Votre inscription est une réussite ! Veuillez maintenant vous authentifiez");
                // direHome();

            }
            if (data == "USER") {
                $(".authentification").hide();
                $("#echecInfo").show();
                $("#echecInfo").append("Un problème est survenue lors de votre inscription ! Le pseudonyme et/ou l'adresse email existe déjà.");
            }
        });
    });

    function signIn() {
        login = $(".login_control").val();
        var passO = $("#singInPass").val();
        $(document).on('click', '#loginIndex', function (event) {
            event.preventDefault();
            $.post("app/singin/C_singIn.php", {login: $(".login_control").val(), pass: $("#singInPass").val()}, function (data) {

                if (data == "true") {
                    $('#registerInfo').hide();
                    $("#registerInfo").html("CONNEXION");
                    redirectHome();
                }
                if (data == "false") {
                    $('#registerInfo').hide();
                    $("#registerInfo").html("MAUVAIS PASSWORD");
                }
            });
        });
    }

    signIn();

    function Rsearch() {
        $(document).on("keyup", "#Ajax-valSearch", function (event) {
            event.preventDefault();
            search = $("#Ajax-valSearch").val();

            $.post("app/search/V_search.php", {search: search}, function (data) {
                $("#Ajax-Rsearch").html(data);
            });
            /*
             * Si le champ de recherche est vide, reaffiche la liste de tweet
             */
            if (search === "") {
                $.ajax({
                    url: 'app/tweets/V_tweet.php',
                    success: function (data) {
                        $("#Ajax-Rsearch").html(data);
                        $(".Ajax-postTweet").hide();
                        writeTweet();
                        redirectHome();
                    }
                });

            }
        });
    }

    Rsearch();
    function ReadFollow() {
        $(document).on("click", "#Ajax-ReadFollow", function (event) {
            event.preventDefault();
            $.ajax({
                url: 'app/follow/V_follow.php',
                success: function (data) {
                    $("#Ajax-TimeLine").hide();
                    $("#Ajax-Rsearch").html(data);
                }
            });
        });
    }

    ReadFollow();
    function ReadFollower() {
        $(document).on("click", "#Ajax-ReadFollower", function (event) {
            event.preventDefault();
            $.ajax({
                url: 'app/follow/V_follower.php',
                success: function (data) {
                    $("#Ajax-TimeLine").hide();
                    $("#Ajax-Rsearch").html(data);
                }

            });
        });
    }

    ReadFollower();
    $(".none2").hide();
    $(".inscript-infos").hide();
    function connex() {
        $(document).on("click", "#Ajax-connexion", function () {
            $(".compte-infos").hide();
            $(".none2").show();
            $("#formRegister").hide();
            $(".inscript-infos").show();
        });

        $(document).on("click", "#inscription", function () {
            $(".compte-infos").show();
            $(".none2").hide();
            $("#formRegister").show();
            $(".inscript-infos").hide();
        });
    }

    connex();
    /*
     * redige un tweet, form en hide() commande situe en haut
     */
    function writeTweet() {
        $(document).on("click", "#Ajax-tweet", function () {
            $(".Ajax-postTweet").hide();
        });
    }

    writeTweet();
    /*
     *  Timeline
     */
    function Timeline() {
        setInterval(function () {
            $.ajax({
                url: 'app/tweets/V_tweet.php',
                success: function (data) {
                    $("#Ajax-TimeLine").html(data);
                }
            });
        }, 3000);
    }

    Timeline();

    /*
     * Envoi de message chat box
     */
    function chatBox() {
        $(document).on('click', '#Ajax-envoie', function (e) {
            e.preventDefault();
            text = $("#status_message").val();
            id = $("#Ajax-envoie").data('id');
            $.get("app/message/C_message.php", {idUser: id, content: text}, function (data) {
                $("#status_message").val('');
            });
        });
    }

    chatBox();

    /*
     * Permet l'envoi de tweet
     * localisation : home/V_home.php
     */
    $(document).on("click", "#Ajax-post", function (e) {
        e.preventDefault();
        content = $("#contentTweet").val();
        $.post("app/tweets/C_tweets.php", {content: content}, function (data) {
        })

    })

    /*
     * Permet l'envoie de tweet
     * localisation : home/V_home.php
     */
    $(document).on('keyup', "#contentTweet", function () {
        va = $("#contentTweet").val();
        if (va.length < 140) {
            $("#Ajax-post").prop('disabled', false);
        }
        else {
            $("#Ajax-post").prop('disabled', true);
        }
    })

    $(document).on('click','#Ajax-tweet', function(e){
        e.preventDefault();
        if($('#contentTweet, #Ajax-post').is(":visible")){
            $('#contentTweet, #Ajax-post').hide();
        } else {
            $('#contentTweet, #Ajax-post').show();
        }
    });

    $(document).on('click','.follow', function(e){
        e.preventDefault();
        ur = $(this).attr("href")
        $.post(ur,{},function(e){
        })
    })


    $(document).on('click','.unfollow', function(e){
        e.preventDefault();
        ur = $(this).attr("href")
        $.post(ur,{},function(e){
        })
    })
});//READY