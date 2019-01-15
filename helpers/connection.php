<?php 

$con = mysqli_connect('localhost','root','','practice');

if($con) {
	echo "Database Connected";
}

else {
	echo "Not Connected";
}