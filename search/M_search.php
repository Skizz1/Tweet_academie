<?php
include('../database.php');

class M_search
{

    function user($login)
    {
        $connexion = \App\Model\Database::get()->prepare("SELECT * FROM tp_users
			WHERE login LIKE '" . $login . "%' ");
        $connexion->execute();
        $data = $connexion->fetchAll();
        $tab  = ["type" => "@"];
        $type = array_merge($tab, $data);
        return $type;
    }

    function tags($tags)
    {
        $connexion = \App\Model\Database::get()->prepare("
			SELECT *, tp_users.login AS gaufre
			FROM tp_tweets
		  	INNER JOIN tp_users
		  	ON tp_tweets.user_id = tp_users.id
			WHERE tp_tweets.content LIKE '%" . $tags . "%' ");
        $connexion->execute();
        $data = $connexion->fetchAll();
        $tab  = ["type" => "#"];
        $type = array_merge($tab, $data);
        return $type;
    }

    function allSearch($data)
    {
        $connexion = \App\Model\Database::get()->prepare("
            SELECT * FROM tp_tweets
            INNER JOIN tp_users
            ON tp_tweets.user_id = tp_users.id
			WHERE login LIKE '%" . $data . "%'
			OR content LIKE '%" . $data . "%'");
        $connexion->execute();
        $data = $connexion->fetchAll();
        $tab  = ["type" => "*"];
        $type = array_merge($tab, $data);
        return $type;
    }

}

?>