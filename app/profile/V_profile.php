<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

session_start();
require_once('C_profile.php');
require_once('M_profile.php');
include('../../header.php');
?>
    <form id="formFirstName" method="post" action="?">
        <h2 id="login"><a href="#">Changer de Nom</a></h2>
        <div class="form-group">
            <label for="InputName">Nom</label>
            <div class="input-group">
                <input type="text" class="text-center form-control text-center JS_inputLogin" name="loginConfirm" id="InputName" value="<?= $profile->getField($_SESSION['id'], 'first_name'); ?>" required>
                <span id="LoginRegister" class="input-group-addon info"><span class="glyphicon glyphicon-user" id="imageLogin"></span></span>
            </div>
        </div>

        <h2 id="login"><a href="#">Changer de Prénom</a></h2>
        <div class="form-group">
            <label for="InputName">Prénom</label>
            <div class="input-group">
                <input type="text" class="text-center form-control text-center JS_inputLogin" name="loginConfirm" id="InputName" value="<?= $profile->getField($_SESSION['id'], 'last_name'); ?>" required>
                <span id="LoginRegister" class="input-group-addon info"><span class="glyphicon glyphicon-user" id="imageLogin"></span></span>
            </div>
        </div>

        <h2 id="login"><a href="#">Changer de Ville</a></h2>
        <div class="form-group">
            <label for="InputName">Ville</label>
            <div class="input-group">
                <input type="text" class="text-center form-control text-center JS_inputLogin" name="loginConfirm" id="InputName" value="<?= $profile->getField($_SESSION['id'], 'city'); ?>" required>
                <span id="LoginRegister" class="input-group-addon info"><span class="glyphicon glyphicon-user" id="imageLogin"></span></span>
            </div>
        </div>

        <h2 id="login"><a href="#">Changer de Pays</a></h2>
        <div class="form-group">
            <label for="InputName">Pays</label>
            <div class="input-group">
                <input type="text" class="text-center form-control text-center JS_inputLogin" name="loginConfirm" id="InputName" value="<?= $profile->getField($_SESSION['id'], 'country'); ?>" required>
                <span id="LoginRegister" class="input-group-addon info"><span class="glyphicon glyphicon-user" id="imageLogin"></span></span>
            </div>
        </div>

        <h2 id="login"><a href="#">Anniversaire</a></h2>
        <div class="form-group">
            <label for="InputName">Date</label>
            <div class="input-group">
                <input type="date" class="text-center form-control text-center JS_inputLogin" name="loginConfirm" id="InputName" value="<?= $profile->getField($_SESSION['id'], 'birthday'); ?>" required>
                <span id="LoginRegister" class="input-group-addon info"><span class="glyphicon glyphicon-user" id="imageLogin"></span></span>
            </div>
        </div>
        <input type="submit" name="submit" id="registerSubmit" value="Envoyer" class="btn btn-info pull-right">
    </form>
<?php
include('../../footer.php');
?>