


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

<?php
  
  if(isset($_POST['update'])){

       echo $name = $_POST['name'];
       echo $email = $_POST['email'];
       echo $phone = $_POST['phone'];
       echo $currentcompany = $_POST['currentcompany'];
       echo $link = $_POST['link'];
       echo $github = $_POST['github'];
       echo $other = $_POST['other'];
       echo $information = $_POST['information'];
      
       $query ="UPDATE form SET name = '$name',email = '$email', phone = '$phone',currentcompany = '$currentcompany', link = '$link',github = '$github', other = '$other',information = '$information' where id=$id";
       $fire = mysqli_query($col, $query);

      // //if($fire)echo "data updated successfully.";
      if($fire) header("Location:paytmdisplay.php");

  } 



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="font-family: sans-serif; color: #515357;">
<br>

	<div class="container col-md-7">

		<div style="position:;">
			<a href=""><img style="width: 100px; height: 35px;" src="img/paytm.png"></a>
		</div>

<br>
<br>

		<div>
			<h2>Internship - General Application</h2>
		</div>

<br>

		<div>
			<h6 style="color: #808080;"><b>NOIDA, BANGALORE /CAREERS – INTERNSHIP /PART-TIME</b></h6>
		</div>

		
	</div><!--end container-->


<br>
<br>

<div style="background-color:#f5f5f7; ">
<div class="container col-md-7">
<div class="section-wrapper page-full-width">
	<br>
	<br>
		<div class="section page-centered application-form">
			<h5>SUBMIT YOUR APPLICATION</h5>

<br>
<br>
			<form method="post" action="">
 
      <label class="col-md-3 control-level">Full name</label>
      <br>
      <input style="width: 500px; height: 40px;" type="text" name="name" value="<?php echo $user['name']?>">
      <br>
      <br>
      <br>
      

       <label class="col-md-3 control-level">Email</label>
       <br>
      <input style="width: 500px; height: 40px;" type="text" name="email" value="<?php echo $user['email']?>" >
      <br>
      <br>
      <br>
      

       <label class="col-md-3 control-level">Phone</label>
       <br>
      <input style="width: 500px; height: 40px;" type="text" name="phone" value="<?php echo $user['phone']?>" >
      <br>
      <br>
      <br>

      <label class="col-md-3 control-level">Current company</label>
      <br>
      <input style="width: 500px; height: 40px;" type="text" name="currentcompany" value="<?php echo $user['currentcompany']?>">
      <br>
      <br>
     
<br>
<br>
      <div class="section page-centered application-form">
			<h5>LINKS</h5>

			<br>
			<br>

			 <label class="col-md-3 control-level">LinkedIn URL</label>
			 <br>
      <input style="width: 500px; height: 40px;" type="text" name="link" value="<?php echo $user['link']?>">
      <br>
      <br>
      <br>
      

       <label class="col-md-3 control-level">Github URL</label>
      <input style="width: 500px; height: 40px;" type="text" name="github" value="<?php echo $user['github']?>">
      <br>
      <br>
      <br>
      

       <label class="col-md-3 control-level">Other website</label>
      <input style="width: 500px; height: 40px;" type="text" name="other" value="<?php echo $user['other']?>">
      <br>
      <br>
      <br>
		
<br>

		
			

			
			
			<label class=" control-level"><h5>ADDITIONAL INFORMATION</h5></label>
			<br>
      <br>
      
      <textarea name="information" style="width: 750px; height: 140px;" > <?php echo $user['information']?> </textarea>
        

</div>

      <br>
      <br>


		
	<br>
	<br>

	<center> <input type="submit" name="update"  value="UPDATE"></center>

	</form>
</div>

</div><!--end container-->
</div><!---bg color-->


<br>
<br>
<br>
<br>










	
</form>
</body>
</html>