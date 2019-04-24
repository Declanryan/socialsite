<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('config.php');
	//include functions page
	require_once('functions.php');
	
	//Connect to mysql server
	$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD,DB_DATABASE);
    if ($conn->connect_error) die($conn->connect_error);
	
	//Sanitize the POST values
	$post = clean($_POST['posted_text'],$conn);
	
	if($post == '') {
		header("location: error.php");
	}
		
	//Create DELETE query
	$user = $_SESSION['SESS_MEMBER_ID'];
	$qry = "DELETE FROM messages WHERE fk_user_id='$user' and my_post='$post';";
	$result = $conn->query($qry);
	//Check whether the query was successful or not
	if (!$result) die ("Database access failed: " . $conn->error);
	header("location: home.php");
	
?>