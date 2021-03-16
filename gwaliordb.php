<?php

$col= mysqli_connect('localhost','root','','gwalior');

if($col)
{
	echo "connected ";
}
else
{
	echo "not connect";
}

?>
