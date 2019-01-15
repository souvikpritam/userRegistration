<?php
//Delete Data

include_once('helpers/connection.php');

if(isset($_GET['id'])) {
	$id = $_GET['id'];
	$del_query = " DELETE FROM info WHERE id = $id ";

	$run_del_query = mysqli_query($con,$del_query);

	header('location:view-data.php');

}




//Free result

mysqli_free_result($run_del_query);

//Close Connection

mysqli_close($con); 

?>