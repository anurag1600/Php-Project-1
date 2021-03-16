<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		Name:
		<input type="text" name="name"><br><br>

		Username:
		<input type="text" name="username"><br><br>

		Password:
		<input type="text" name="password"><br><br>

		

		<input type="submit" name="submit" value="submit">
	</form>

</body>
</html>

<?php

include "gwaliordb.php";

 echo $name=$_POST['name'];

echo $username=$_POST['username'];

echo $password=$_POST['password'];


$w = "INSERT INTO user(name,username,password)VALUES('$name','$username','$password')";

$f=mysqli_query($col,$w);

?>