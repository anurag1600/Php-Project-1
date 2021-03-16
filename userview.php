<?php
include ('userdb.php');

if (isset($_GET['id']))
{
 $id =$_GET['id'];
$query ="select * From user_registration where id=$id";
$fire =mysqli_query($col,$query);


$user = mysqli_fetch_assoc($fire);
echo $user['username'];

}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>name:<?php echo $user['name'] ?></h2>
	<h2>username:<?php echo $user['username'] ?></h2>
	<h2>password:<?php echo $user['password'] ?></h2>
	<h2>image:<?php echo $user['image'] ?></h2>
	

</body>
</html>