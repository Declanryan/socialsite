<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('config.php');
	require_once('functions.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD,DB_DATABASE);
    if ($conn->connect_error) die($conn->connect_error);
	
	//Sanitize the POST values
	$login = clean($_POST['email'],$conn);
	$password = clean($_POST['password'],$conn);
	
	//Input Validations
	if($login == '') {
		$errmsg_arr[] = 'Login ID missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the error form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: error_page.php");
		exit();
	}
	
	//Create query
	$qry="SELECT * FROM users WHERE user_email='$login' AND password='".md5($_POST['password'])."'";
	$result = $conn->query($qry);
    if (!$result) die ("Database access failed: " . $conn->error);
	
	//Check whether the query was successful or not
	if($result->num_rows == 1) {
			//Login Successful
		session_regenerate_id();
		$user = $result->fetch_array(MYSQLI_ASSOC);
		$_SESSION['SESS_MEMBER_ID'] = $user['user_id'];
		$_SESSION['SESS_EMAIL'] = $user['user_email'];
		$_SESSION['SESS_PASSWORD'] = $user['password'];
		$_SESSION['SESS_GROUP_NAME'] = $user['group_name'];
		$_SESSION['SESS_FNAME'] = $user['fname'];
		$_SESSION['SESS_SNAME'] = $user['sname'];
		$_SESSION['SESS_ADDRESS1'] = $user['address1'];
		$_SESSION['SESS_ADDRESS2'] = $user['address2'];
		$_SESSION['SESS_CITY'] = $user['city_town'];
		$_SESSION['SESS_COUNTY'] = $user['county'];
		session_write_close();
		header("location: home.php");
		exit();
	}else {
		//Login failed
		header("location: error_page.php");
		exit();
	}
	
?>