<?php
include ('paytmdb.php');

if (isset($_GET['id']))
{
 $id =$_GET['id'];
$query ="select * From form where id=$id";
$fire =mysqli_query($col,$query);

//if($fire)echo "we got the data.";
$user = mysqli_fetch_assoc($fire);
//echo $user['username'];

}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>name:<?php echo $user['name'] ?></h2>
	<h2>email:<?php echo $user['email'] ?></h2>
	<h2>phone:<?php echo $user['phone'] ?></h2>
	<h2>currentcompany:<?php echo $user['currentcompany'] ?></h2>
	<h2>link:<?php echo $user['link'] ?></h2>
	<h2>github:<?php echo $user['github'] ?></h2>
	<h2>other:<?php echo $user['other'] ?></h2>
	<h2>information:<?php echo $user['information'] ?></h2>

</body>
</html>