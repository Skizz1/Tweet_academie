<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL);

require('M_profile.php');

class ProfileController
{
    /**
     * Désactive un compte
     * @param int $id l'ID de l'utilisateur
     */
    public function desactivateProfil($id)
    {
        $instance = new ProfileModel();
        $instance->update($id, ['active' => 1]);
        echo 'compte désactivé';
    }

    /**
     * Changer un mot de passe
     * @param int $id l'ID de l'utilisateur
     * @param $field1 le mot de passe à changer
     * @param $field2 la confirmation du mot de passe
     */
    public function changePassword($id, $field1, $field2)
    {
        if ($field1 === $field2)
        {
            $instance = new ProfileModel();
            $instance->update($id, ['password' => hash("ripemd160", "si tu aimes la wac tape dans tes mains" . $field1)]);
        } else
        {
            echo "passError"; //AJA
        }
    }

    /**
     * Changer de login
     * @param int $id l'ID de l'utilisateur
     * @param $field1 le login à changer
     * @param $field2 la confirmation du login
     */
    public function changeLogin($id, $field1, $field2)
    {
        if ($field1 === $field2)
        {
            $instance = new ProfileModel();
            $instance->update($id, ['login' => $field1]);
        } else {
            echo "loginError"; //AJAX
        }
    }

    /**
     * Changer de login
     * @param int $id l'ID de l'utilisateur
     * @param $field1 le mail à changer
     * @param $field2 la confirmation du mail
     */
    public function changeMail($id, $field1, $field2)
    {
        if ($field1 === $field2)
        {
            $instance = new ProfileModel();
            $instance->update($id, ['mail' => $field1]);
        } else {
            echo "mailError"; //AJAX
        }
    }

    /**
     * Changer un theme
     * @param int $id l'ID de l'utilisateur
     * @param string $newTheme le nouveau theme
     */
    public function setTheme($id, $newTheme)
    {
        $instance = new ProfileModel();
        $instance->update($id, ['theme' => $newTheme]);
    }

    public function changeProfile($id){
        if(!empty($_POST))
        {
            $instance = new ProfileModel();
            $instance->update($id, [
                'first_name' => $_POST['first_name'],
                'last_name' => $_POST['last_name'],
                'cpostal' => $_POST['cpostal'],
                'adress' => $_POST['adress'],
                'departement' => $_POST['departement'],
                'region' => $_POST['region'],
                'city' => $_POST['city'],
                'country' => $_POST['country'],
                'birthday' => $_POST['birthday']
            ]);
        }
    }
}

$data = new ProfileController();