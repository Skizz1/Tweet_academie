<?php
include("M_register.php");

class C_register
{
    var $login;
    var $mail;
    var $pass;
    var $prenom;
    var $nom;
    var $city;
    var $birthday;
    var $passH;

    function __construct()
    {
        $this->login    = $_POST["login"];
        $this->mail     = $_POST["mail"];
        $this->pass     = $_POST["pass"];
        $this->prenom   = $_POST["prenom"];
        $this->nom      = $_POST["nom"];
        $this->city     = $_POST["city"];
        $this->birthday = $_POST["birthday"];
        $this->passH    = hash("ripemd160", "si tu aimes la wac tape dans tes mains" . $this->pass);
    }

    function ExisteUser()
    {

        $registerSQL = new registerSQL;
        return $regi = $registerSQL->registerAllReadyExiste($this->login, $this->passH, $this->mail);
    }

    function register()
    {

        if ($this->ExisteUser() == NULL)
        {
            $registerSQL = new registerSQL;
            $registerSQL->register($this->login, $this->passH, $this->mail, $this->prenom, $this->nom, $this->city, $this->birthday);
        }
        else
        {
            echo "USER";//Ajax
            return false;
        }
    }
}

$C_register = new C_register;
$C_register->ExisteUser();
$C_register->register();
?>