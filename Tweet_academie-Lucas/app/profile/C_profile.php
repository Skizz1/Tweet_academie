<?php
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
    }

    /**
     * Changer un mot de passe
     * @param int $id l'ID de l'utilisateur
     * @param string $newpass le nouveau mot de passe
     */
    public function changePassword($id, $newpass)
    {
        $instance = new ProfileModel();
        $instance->update($id, ['password' => hash("ripemd160", "si tu aimes la wac tape dans tes mains" . $newpass)]);
    }

    /**
     * Changer un theme
     * @param int $id l'ID de l'utilisateur
     * @param string $newTheme le nouveau theme
     */
    public function setTheme($id, $newTheme){
        $instance = new ProfileModel();
        $instance->update($id, ['theme' => $newTheme]);
    }
}