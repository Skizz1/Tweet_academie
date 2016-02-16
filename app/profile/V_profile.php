<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

session_start();
require_once('C_profile.php');
require_once('M_profile.php');
include('../../header.php');

?>
    <form id="formFirstName" method="post" action="?">
        <h2 class="changeTitle"><a href="#">Changer de Nom</a></h2>
        <div class="form-group">
            <label for="InputName">Nom</label>
            <div class="input-group">
                <input type="text" class="text-center form-control text-center JS_inputLogin" name="first_name" id="InputName" value="<?= $profile->getField($_SESSION['id'], 'first_name'); ?>" required>
                <span id="LoginRegister" class="input-group-addon info"><span class="glyphicon glyphicon-user" id="imageLogin"></span></span>
            </div>
        </div>

        <h2 class="changeTitle"><a href="#">Changer de Prénom</a></h2>
        <div class="form-group">
            <label for="InputName">Prénom</label>
            <div class="input-group">
                <input type="text" class="text-center form-control text-center JS_inputLogin" name="last_name" id="InputName" value="<?= $profile->getField($_SESSION['id'], 'last_name'); ?>" required>
                <span id="LoginRegister" class="input-group-addon info"><span class="glyphicon glyphicon-user" id="imageLogin"></span></span>
            </div>
        </div>

        <h2 class="changeTitle"><a href="#">Changer de Code Postal</a></h2>
        <div class="form-group">
            <label for="InputName">Code postal :</label>
            <div class="input-group">
                <input type="text" class="text-center form-control text-center JS_inputLogin" name="cpostal" id="InputName" value="<?= $profile->getField($_SESSION['id'], 'cpostal'); ?>" required>
                <span id="LoginRegister" class="input-group-addon info"><span class="glyphicon glyphicon-user" id="imageLogin"></span></span>
            </div>
        </div>

        <h2 class="changeTitle"><a href="#">Changer d'Adresse</a></h2>
        <div class="form-group">
            <label for="InputName">Adresse</label>
            <div class="input-group">
                <textarea name="adress"><?= $profile->getField($_SESSION['id'], 'adress'); ?></textarea>
            </div>
        </div>

        <h2 class="changeTitle"><a href="#">Changer de Département</a></h2>
        <div class="form-group">
            <label for="InputName">Département</label>
            <div class="input-group">
                <input type="text" class="text-center form-control text-center JS_inputLogin" name="departement" id="InputName" value="<?= $profile->getField($_SESSION['id'], 'departement'); ?>">
                <span id="LoginRegister" class="input-group-addon info"><span class="glyphicon glyphicon-user" id="imageLogin"></span></span>
            </div>
        </div>

        <h2 class="changeTitle"><a href="#">Changer de Région</a></h2>
        <div class="form-group">
            <label for="InputName">Région</label>
            <div class="input-group">
                <input type="text" class="text-center form-control text-center JS_inputLogin" name="region" id="InputName" value="<?= $profile->getField($_SESSION['id'], 'region'); ?>">
                <span id="LoginRegister" class="input-group-addon info"><span class="glyphicon glyphicon-user" id="imageLogin"></span></span>
            </div>
        </div>

        <h2 class="changeTitle"><a href="#">Changer de Ville</a></h2>
        <div class="form-group">
            <label for="InputName">Ville</label>
            <div class="input-group">
                <input type="text" class="text-center form-control text-center JS_inputLogin" name="city" id="InputName" value="<?= $profile->getField($_SESSION['id'], 'city'); ?>">
                <span id="LoginRegister" class="input-group-addon info"><span class="glyphicon glyphicon-user" id="imageLogin"></span></span>
            </div>
        </div>

        <h2 class="changeTitle"><a href="#">Changer de Pays</a></h2>
        <div class="form-group">
            <label for="InputName">Pays</label>
            <div class="input-group">
                <input type="text" class="text-center form-control text-center JS_inputLogin" name="country" id="InputName" value="<?= $profile->getField($_SESSION['id'], 'country'); ?>">
                <span id="LoginRegister" class="input-group-addon info"><span class="glyphicon glyphicon-user" id="imageLogin"></span></span>
            </div>
        </div>

        <h2 class="changeTitle"><a href="#">Anniversaire</a></h2>
        <div class="form-group">
            <label for="InputName">Date</label>
            <div class="input-group">
                <input type="date" class="text-center form-control text-center JS_inputLogin" name="birthday" id="InputName" value="<?= $profile->getField($_SESSION['id'], 'birthday'); ?>" required>
                <span id="LoginRegister" class="input-group-addon info"><span class="glyphicon glyphicon-user" id="imageLogin"></span></span>
            </div>
        </div>
        <input type="submit" name="submit" id="registerSubmit" value="Envoyer" class="btn btn-info pull-right">
    </form>

    <!-- Lien vers JS -->
    <script src="../../public/java/JQuery.js"></script>
    <script src="../../public/java/java.js"></script>
    <script src="../../public/java/profile.js"></script>
<?php

$data->changeProfile($_SESSION['id']);

include('../../footer.php');
?>