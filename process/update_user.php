<?php
include_once('helpers/connection.php');
include_once('helpers/insert-value.php');


/*

if(isset($_POST['submit'])) {
	$first_name = $_POST['first_name'];
	if(empty($first_name)) {
		$error_msg['first_name'] = "First Name is Required";
	}
	else if (!preg_match("/^[a-zA-Z ]*$/",$first_name)) {
		$error_msg['first_name'] = "Only letter is allowed";
	}

	$last_name = $_POST['last_name'];
	if(empty($last_name)) {
		$error_msg['last_name'] = "Last Name is Required";
	}
	else if (!preg_match("/^[a-zA-Z ]*$/",$last_name)) {
		$error_msg['last_name'] = "Only letter is allowed";
	}

	$email = $_POST['email'];
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$error_msg['email'] = "Email is Required";
	}

	$password = $_POST['password'];
	if(empty($password)) {
		$error_msg['password'] = "Password is Required";
	}

	else if (strlen($password) <= 8) {
		$error_msg['password'] = "Password must be atleast 8 digits";
	}

	$mobile_no = $_POST['mobile_no'];
	if(empty($mobile_no)) {
		$error_msg['mobile_no'] = "Mobile Number is Required";
	}

	$query = "INSERT INTO info (first_name,last_name,email,password,mobile_no) VALUES ('$first_name','$last_name','$email','$password','$mobile_no')";

	$run = mysqli_query($con,$query);

	if($run == TRUE) {
		echo "<script>alert('Data interted successfully')</script>";
	}
}
*/
