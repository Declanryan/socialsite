<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('config.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD,DB_DATABASE);
    if ($conn->connect_error) die($conn->connect_error);
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str, $connection) {
		return $connection->real_escape_string($str);
	}
	
	//Sanitize the POST values
	$email = clean($_POST['email'],$conn);
	$password = clean($_POST['password'],$conn);
	$cpassword = clean($_POST['cpassword'],$conn);
	$group_name = clean($_POST['group_name'],$conn);
	$fname = clean($_POST['fname'],$conn);
	$sname = clean($_POST['sname'],$conn);
	$address1 = clean($_POST['address1'],$conn);
	$address2 = clean($_POST['address2'],$conn);
	$city_town = clean($_POST['city_town'],$conn);
	$county = clean($_POST['county'],$conn);
	
	//Input Validations
	if($email == '') {
		$errmsg_arr[] = 'Email missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	if($cpassword == '') {
		$errmsg_arr[] = 'Password confrirmation missing';
		$errflag = true;
	}
	if($group_name == '') {
		$errmsg_arr[] = 'Group name missing';
		$errflag = true;
	}
	if($fname == '') {
		$errmsg_arr[] = 'First name missing';
		$errflag = true;
	}
	if($sname == '') {
		$errmsg_arr[] = 'Surname missing';
		$errflag = true;
	}
	if($address1 == '') {
		$errmsg_arr[] = 'Line 1 of address missing';
		$errflag = true;
	}
	if($address2 == '') {
		$errmsg_arr[] = 'Line2 of address missing';
		$errflag = true;
	}
	if($city_town == '') {
		$errmsg_arr[] = 'City-Town missing';
		$errflag = true;
	}
	if($county == '') {
		$errmsg_arr[] = 'County missing';
		$errflag = true;
	}
	if( strcmp($password, $cpassword) != 0 ) {
		$errmsg_arr[] = 'Passwords do not match';
		$errflag = true;
	}
	
	//Check for duplicate login ID
	if($email != '') {
		$qry = "SELECT * FROM users WHERE user_email='$email'";
		$result = $conn->query($qry);
        if (!$result) die ("Database access failed: " . $conn->error);
		//$result = mysql_query($qry);
		
		if($result->num_rows != 0) {
			$errmsg_arr[] = 'Email ID already in use';
			$errflag = true;
		}
		//$result->close();
		
	}
	
	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: reg_fail.php");
		exit();
	}

	//Create INSERT query
	$qry = "INSERT INTO users(user_email, password, group_name, fname, sname, address1, address2, city_town, county) VALUES('$email','".md5($_POST['password'])."', '$group_name', '$fname','$sname', '$address1', '$address2', '$city_town', '$county')";
	$result = $conn->query($qry);
	if (!$result) die ("Database access failed: " . $conn->error);
	//Check whether the query was successful or not
	header("location: reg_success.php");
	
?>