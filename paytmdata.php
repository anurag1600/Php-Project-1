<?php

include('paytmdb.php');
 
echo $name=$_POST['name'];
echo $email=$_POST['email'];
echo $phone=$_POST['phone'];
echo $currentcompany=$_POST['currentcompany'];
echo $link=$_POST['link'];
echo $github=$_POST['github'];
echo $other=$_POST['other'];
echo $information=$_POST['information'];





$q ="INSERT INTO form (name,email,phone,currentcompany,link,github,other,information)VALUES('$name','$email','$phone','$currentcompany','$link','$github','$other','$information')";

$query=mysqli_query($col,$q);

// if( $query)
//   {
//   	header('location:display.php');
//   }


//
 ?>