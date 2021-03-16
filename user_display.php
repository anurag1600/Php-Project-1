<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table>
		<tr>
			<th>name</th>
			<th>username</th>
			<th>password</th>
			<th>image</th>
			<th>Action</th>
		</tr>

		<?php

		include "userdb.php";
		$d="select * from user_registration";

		$q=mysqli_query($col,$d);
		while ($r= mysqli_fetch_array($q)) {

		?>

		<tr>
			
			<td><?php echo $r['name'];?></td>
			<td><?php echo $r['username'];?></td>
			<td><?php echo $r['password'];?></td>
			<td><img src="<?php echo $r['image'];?>" width="200px" height="80px"></td>
			<td>
				<a href="userview.php?id=<?php echo $r['id'];?>">View</a>
				<a href="useredit.php?id=<?php echo $r['id'];?>">Edit</a>
				<a href="userdelete.php?id=<?php echo $r['id'];?>">Delete</a>
			</td>
		</tr>

		<?php
	}
	?>
	</table>

</body>
</html>