<?php

$col= mysqli_connect('localhost','root','','login');

if($col)
{
	echo "connected ";
}
else
{
	echo "not connect";
}

?>
