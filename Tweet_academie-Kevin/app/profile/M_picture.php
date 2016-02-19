<?php
error_reporting(E_ALL);

require_once('M_profile.php');

class Mpicture
{
    function Upload($picture, $type)
    {
        session_start();
        move_uploaded_file($picture, "../../public/css/images/users/" . $_SESSION["id"] . ".png");
    }

    function LookPicture($user)
    {
        $Mprofil = new ProfileModel();
        if (file_exists("../../public/css/images/users/" . $user . ".png"))
        {
            $Mprofil->update($user, ['avatar' => $user]);
            return $user;
        }
        else
        {
            $Mprofil->update($user, ['avatar' => 'AVATAR']);
            return 'AVATAR';
        }
    }

}

?>