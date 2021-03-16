<?php

$col= mysqli_connect('localhost','root','','bhimrao');

if($col)
{
	echo "connected ";
}
else
{
	echo "not connect";
}

?>
