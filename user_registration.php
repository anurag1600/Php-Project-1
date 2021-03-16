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

		Image:
		<input type="file" name="image">

		<br><br>

		<input type="submit" name="submit" value="submit">
	</form>

</body>
</html>

<?php

include "userdb.php";

 echo $name=$_POST['name'];

echo $username=$_POST['username'];

echo $password=$_POST['password'];

$filename=$_FILES['image'] ['name'];
$tempname=$_FILES['image'] ['tmp_name'];
echo $file="upload/".$filename;
move_uploaded_file($tempname,$file);

// echo "<img src='$file' height='100' width='100' />"

$w = "INSERT INTO user_registration(name,username,password,image)VALUES('$name','$username','$password','$file')";

$f=mysqli_query($col,$w);

?>