<?php
include("C_search.php");
include("../follow/M_follow.php");
$Cfollow = new Cfollow;
switch ($search["type"])
{
    case '#':
        for ($i = 0; $i < count($search) - 1; $i++)
        {
            echo $search[$i]->content;
            echo ' ' . $search[$i]->gaufre . "</br><hr>";
        }
        break;
    case '@':
        for ($i = 0; $i < count($search) - 1; $i++)
        {
            echo '<a class="name-search" href="app/profile/V_profile.php?id=' . $search[$i]->id . '">' . $search[$i]->login . '</a>';
            if ($Cfollow->verifFollow($_SESSION["id"], $search[$i]->id))
            {
                echo " <a href='app/follow/C_unFollow.php?follow=" . $search[$i]->id . "' class='unfollow'>unfollow</a>";
            }
            else
            {
                echo "<a href='app/follow/C_follow.php?follow=" . $search[$i]->id . "' class='follow'>follow</a>";
            }
            echo " <a href='app/message/V_message.php?idUser=" . $search[$i]->id . "'><span class='glyphicon glyphicon-envelope env'></span></a>" . "</br><hr>";
        }
        break;
    case '*':
        for ($i = 0; $i < count($search) - 1; $i++)
        {
            echo $search[$i]->login;
            echo $search[$i]->content;
            echo " <a href='app/follow/C_follow.php?follow=" . $search[$i]->id . "'>follow</a>" . "</br>";
            echo " <a href='app/message/V_message.php?idUser=" . $search[$i]->id . "'><span class='glyphicon glyphicon-envelope env'></span></a>";
        }
        break;
}
?>