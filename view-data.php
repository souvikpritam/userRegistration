<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Form</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,700" rel="stylesheet">
    <!---Font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <!--Main stylesheet-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.css">
</head>
<body>


<?php
include_once('helpers/connection.php');

$sql = "SELECT * FROM info";
$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result) > 0) { ?>

<table class="table table-bordered">
	<tr>
		<th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Mobile No</th>
		<th>Gender</th>
		<th>Comment</th>
		<th>Date-Of-Birth</th>
		<th>Image</th>
	</tr>
  <?php while($data = mysqli_fetch_array($result)) { ?>
  	<tr>
  		<td><?php echo $data['id']; ?></td>
  		<td><?php echo $data['first_name']; ?></td>
  		<td><?php echo $data['last_name']; ?></td>
  		<td><?php echo $data['email']; ?></td>
  		<td><?php echo $data['mobile_no']; ?></td>
  		<td><?php echo $data['gender']; ?></td>
  		<td><?php echo $data['comment']; ?></td>
  		<td><?php echo $data['dob']; ?></td>
      <td><?php echo $data['dob']; ?></td>
  		<td><img width="200px" src="<?php echo $data['img'];?>"/></td>
      <td><a class="btn btn-danger" name ="id" href="delete-data.php?id=<?php echo $data['id'];?>">Delete</a></td>
  	</tr>
  	<?php } ?>	

</table>




<?php }

else {
	echo "No data found";
}

//Free result

mysqli_free_result($result);

//Close Connection

mysqli_close($con); 

?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--  Flatpickr  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html> 

