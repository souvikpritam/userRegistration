<?php

if( isset($_POST['submit']) && $_POST['submit'] == 'Save' ){
	$first_name = $_POST['first_name'];
	if(empty($first_name)) {
		$error_msg['first_name'] = "First Name is Required";
	}

	$last_name = $_POST['last_name'];
	if(empty($last_name)) {
		$error_msg['last_name'] = "Last Name is Required";
	}

	$email = $_POST['email'];
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$error_msg['email'] = "Email is Required";
	}

	$password = $_POST['password'];
	if(empty($password)) {
		$error_msg['password'] = "Password is Required";
	}

	$mobile_no = $_POST['mobile_no'];
	if(empty($mobile_no)) {
		$error_msg['mobile_no'] = "Mobile Number is Required";
	}

	$dob = strtotime($_POST['dob']);
	$dob_check = date("d-m-Y",$dob);
	if(empty($dob_check)) {
		$error_msg['dob'] = "Date of birth is Required";
	}

	$website_url = $_POST['website_url'];
	if(!filter_var($website_url,FILTER_VALIDATE_URL)) {
		$error_msg['website_url'] = "URL is Required";
	}

	$gender = $_POST['gender'];
	if(empty($gender)) {
		$error_msg['gender'] = "Gender is Required";
	}

	$select = $_POST['select_one'];
	if($select == "NULL") {
		$error_msg['select_one'] = "Option Must be selected";
	}

	$checkbox = $_POST['checkbox'];
	$checkbox_check = implode(',',$checkbox);
	if(empty($checkbox_check)) {
		$error_msg['checkbox'] = "Checkbox is Required";
	}

	$img = basename($_FILES['img']['name']);
	$img_tmp = $_FILES['img']['tmp_name'];
	$img_type = $_FILES['img']['type'];
	$img_size = $_FILES['img']['size'];
	$img_path = "assets/uploads/".$img;
	if($img) {
		if(($img_size <= 1024*1024) && (($img_type == "image/png") || ($img_type == "image/jpeg"))) {
			 move_uploaded_file($img_tmp,$img_path);
		}
		else {
			$error_msg['img'] = "Please upload image png format and max 1MB";
		}
	}

	else {
		$error_msg['img'] = "File is required";
	}

	$comment = $_POST['comment'];
	if(empty($comment)) {
		$error_msg['comment'] = "Comment must be needed";
	}

	if(!empty($error_msg)){
		header("Location: insert_user.php");
		exit();
	}

	$query = "INSERT INTO info (first_name,last_name,email,password,mobile_no,website_url,gender,select_one,img,comment,checkbox,dob) VALUES ('$first_name','$last_name','$email','$password','$mobile_no','$website_url','$gender','$select','$img_path','$comment','$checkbox_check','$dob_check')";


	$run = mysqli_query($con,$query);

	if($run) {
		echo "<script>alert('Data interted successfully')</script>";
		
	}

}