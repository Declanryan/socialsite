 <?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('config.php');
	require_once('functions.php');
	
	//Connect to mysql server
	$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD,DB_DATABASE);
    if ($conn->connect_error) die($conn->connect_error);
	
	//Sanitize the POST values
	$post = clean($_POST['post_text'],$conn);
	
	if($post == '') {
		header("location: home.php");
	}
	
	
//Create INSERT query
	$user = $_SESSION['SESS_MEMBER_ID'];
	$qry = "INSERT INTO messages(my_post, fk_user_id) VALUES('$post', '$user')";
	$result = $conn->query($qry);
	//Check whether the query was successful or not
	if (!$result) die ("Database access failed: " . $conn->error);
	header("location: home.php");
	
	
?>
 