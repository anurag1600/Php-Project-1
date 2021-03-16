<?php
include 'paytmdb.php';

$id=$_GET['id'];

$q="DELETE FROM form WHERE id=$id";


mysqli_query($col,$q);

header('location:paytmdisplay.php');

?>