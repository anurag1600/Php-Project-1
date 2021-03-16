<?php
 session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="" method="post">

	<input type="text" name="username" placeholder="username">
	<br>

	<input type="text" name="password" placeholder="password">
	<br>

	<input type="submit" name="login" value="Login">


	
</form>


</body>
</html>


<?php

include 'userdb.php';

if (isset($_POST['login'])) 
{
	echo $user =$_POST['username'];
	echo $pwd = $_POST['password'];


$query ="SELECT * FROM user_registration WHERE username='$user' && password= $pwd";
$data = mysqli_query($col,$query);

$total=mysqli_num_rows($data);
// echo $total;


if ($total==1){

	$_session['username']=$user;
	header('location:logindata.php');

}
else
{
	echo "login failed";
}

}
?>