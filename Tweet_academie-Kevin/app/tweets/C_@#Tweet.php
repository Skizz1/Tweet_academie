<?php
require_once("M_tweets.php");
class urlUser
{
	function C_urlUser($contenu)
	{
		$exp = explode(" ", $contenu);
		$tweet = "";
		for ($i=0; $i < count($exp); $i++)
		{ 
			$sub = substr($exp[$i], 0,1);
			if ($sub == "@")
			{
				$nameUser = substr($exp[$i], 1,strlen($exp[$i]));
				$TweetsModel = new TweetsModel;
				$user = $TweetsModel->UserExiste($nameUser);
				if ($user)
				{
					$tweet .= "<a href='#'>".$exp[$i]."</a> ";
				}
			}
			else
			{
				$tweet .= $exp[$i]." ";
			}
		}
		return $tweet;
	} 
}
?>