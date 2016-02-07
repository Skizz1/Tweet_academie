<?php

include("M_timeLine.php");

foreach ($timeLine as $key => $value)
 {
echo $value->login."<br/>";
echo "A publie ".$value->content."<br/>";
echo "le ".$value->created."<br/>";
}
?>
