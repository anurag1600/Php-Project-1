<?php

session_start();

$_session['username']="anurag tiwari";
$_session['class']="mca";


echo $_session['username'];
echo $_session['class'];


session_unset();



echo $session['username'];
echo $session['class'];



