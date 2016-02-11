<?php
include("M_search.php");
class Csearch
{
	var $search;
	function __construct()
	{
		$this->search = addslashes( htmlspecialchars($_POST["search"]) );
	}
	function search($info)
	{ 

		$M_search = new M_search;
		$long = strlen($info);
		$type =  substr($info, 0,1);
		$content =  substr($info,1,$long);
		// Recherche par nom user
		if ($type == "@") 
		{	
			$info = substr( $info, 1,strlen($info) );
			return $M_search->user(addslashes( $info ) );
		}
		else if( $type == "#")
		{		
			return $M_search->tags(addslashes( $info ) );	
		}
		else
		{
			return $M_search->allSearch(addslashes( $info ) );
		}
	}
}
$Csearch = new Csearch;
$search = $Csearch->search($_POST["search"]);

?>