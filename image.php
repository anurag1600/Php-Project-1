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
	
	<input type="file" name="file" value="">

	<input type="submit" name="submit" value="submit">

</form>


</body>
</html>

<?php
include 'paytmdb.php';
//print_r($_FILES['file']);
$filename=$_FILES['file'] ['name'];
$tempname=$_FILES['file'] ['tmp_name'];

$file = "upload/" .$filename;

move_uploaded_file($tempname, $file );

echo "<img src='$file' height='100' width='100' />";

$q="INSERT INTO image(file) VALUES ('$file')";
mysqli_query($col,$q);


?>