<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('M_profile.php');

class Mpicture
{
    function Upload($picture)
    {
        require_once('../session_start.php');
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