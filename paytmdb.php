<?php

$col= mysqli_connect('localhost','root','','paytm');

if($col)
{
	echo "connected ";
}
else
{
	echo "not connect";
}

?>
