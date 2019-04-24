<?php

	require_once('config.php');// database credentials
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str, $connection) {
		return $connection->real_escape_string($str);
	}
	
	// displays messages from the user
	function showMessages($user_id) // get posts from user
	{
		$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD,DB_DATABASE);// create connection
		if ($conn->connect_error) die($conn->connect_error);
		
		$user = $_SESSION['SESS_MEMBER_ID'];
		$qry = "SELECT my_post, post_date From messages where messages.fk_user_id ='$user_id'";
		$result = $conn->query($qry);
		$rows = $result->num_rows;
		//Check whether the query was successful or not
		if (!$result) die ("Database access failed: " . $conn->error);
		else{
			for($j=0;$j<$rows;++$j)
				{
					$row = $result->fetch_array(MYSQLI_ASSOC);// print out messages for the user
					$posts = stripslashes($row['my_post']);
					echo '<div class="card-footer text-info"> Posted on: ', stripslashes($row['post_date']),' </div>';
					echo "<form method='post' action='delete_exec.php'><input name='posted_text' type='text' class='form-control' value='$posts'><button type='delete' class='btn btn-primary move'>Delete</button></form>";
			}
		}
	}
	
	// save image from user to database
	function saveimage($name, $image)
	{
		//Connect to mysql server
		$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD,DB_DATABASE);
		if ($conn->connect_error) die($conn->connect_error);
		$qry = "INSERT INTO images(name, image, fk_user_id) VALUES('$name', '$image','2')";
		$result = $conn->query($qry);
		if (!$result) die ("Database access failed: " . $conn->error);
	}
	
	// display images from the user
	function displayimages()
	{
		$user = $_SESSION['SESS_MEMBER_ID'];
		$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD,DB_DATABASE);
		if ($conn->connect_error) die($conn->connect_error);
		$qry = "SELECT name, image FROM images where images.fk_user_id ='$user_id'";
		$result = $conn->query($qry);
		$rows = $result->num_rows;
		//Check whether the query was successful or not
		if (!$result) die ("Database access failed: " . $conn->error);
		else{
			for($j=0;$j<$rows;++$j)
				{
					$row = $result->fetch_array(MYSQLI_ASSOC);
					echo '<img height="100" width="100" src="data:image;base64,'.$row['image'].' "> ';
				}
			}

	} 




?>