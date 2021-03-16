<?php

include('db.php');
 
echo $fname=$_POST['fname'];
echo $lname=$_POST['lname'];
echo $mobile=$_POST['mobile'];
echo $email=$_POST['email'];
echo $marks=$_POST['marks'];
echo $coursetype=$_POST['coursetype'];
echo $gender=$_POST['gender'];





$q ="INSERT INTO form (fname,lname,mobile,email,marks,coursetype,gender)VALUES('$fname','$lname','$mobile','$email','$marks','$coursetype','$gender')";

$query=mysqli_query($col,$q);

if( $query)
  {
  	header('location:display.php');
  }


?>