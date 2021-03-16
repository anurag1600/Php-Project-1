<!DOCTYPE>

<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="css/first.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
		table,tr,td,th{
			border: 1px solid;
			width: 1000px;
			height: 90px;
			text-align: center;
			border-collapse: inherit;
		}
		/*tr:hover{
			background:grey;
		}*/
		td:hover{
			background: ;
		}
		/*th:hover{
			background:orange;
		}*/
		
	</style>

</head>
<body>




<!-----------------------------end navbar -------------------------------->



<div class="container">
<div  style="height: 1100px;">
  


<table>
	<tr style="background-color: #1b72d0ed;">
		<th>ID</th>
		<th>name</th>
		<th>email</th>
		<th>phone</th>
		<th>currentcompany</th>
		<th>link</th>
		<th>github</th>
		<th>other</th>
    	<th>information</th>

	</tr>

<?php

include "paytmdb.php";

$data="select * from form";
$q=mysqli_query($col,$data);

while($result=mysqli_fetch_array($q)){

?>

<tr>
	<td><?php echo $result['id'];?></td>
	<td><?php echo $result['name'];?></td>
	<td><?php echo $result['email'];?></td>
	<td><?php echo $result['phone'];?></td>
	<td><?php echo $result['currentcompany'];?></td>
	<td><?php echo $result['link'];?></td>
	<td><?php echo $result['github'];?></td>
	<td><?php echo $result['other'];?></td>
  	<td><?php echo $result['information'];?></td>
	





	<td>
	<a href="paytmview.php?id=<?php echo $result['id'];?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
<br>
<a href="paytmedit.php?id=<?php echo $result['id'];?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
<br>
		<a href="paytmdelete.php?id=<?php echo $result['id'];?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
	</td> 



</tr>
<?php
}
?>
</table>
<br>
<br>

<center>

<button   disabled>
  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
  Loading...
</button>
</center>

<br>
<br>

<div class="container">
		<ul class="pagination pagination-sm">
			<li class="page-item "><a href="" class="page-link">Previous</a>
			</li>
			<li class="page-item active"><a href="" class="page-link">1</a>
			</li>
			<li class="page-item "><a href="" class="page-link">2</a>
			</li>
			<li class="page-item"><a href="" class="page-link">3</a>
			</li>
			<li class="page-item disabled"><a href="" class="page-link">4</a>
			</li>
			
<li class="page-item"><a href="" class="page-link">5</a>
			</li>
			<li class="page-item"><a href="" class="page-link">Next</a>
			</li>
		</ul>



</div>
</div>

</body>
</html>