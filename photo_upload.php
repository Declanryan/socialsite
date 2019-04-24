<?php
	require_once('auth.php');// check authorisation
	//Include database connection details
	require_once('config.php');
	

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/upload.css">
	<script src="javascript/functions.js"></script>
<title>Welcome: $user</title>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-expand-lg navbar bg-dark">
				<a class="navbar-brand" href="#"><img src="images/logo.png" alt="logo" width="" height=""></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="my_account.php">My Account</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="logout.php">Logout</a>
						</li>
					</ul>
					<form class="form-inline my-2 my-lg-0" action="http://www.google.ie/search?hl=en-GB&source=hp&q=">
						<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" value="" name="q" id="s">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form>
				</div>
			</nav>
		</header>
	<body>
		<section class="container-fluid">
			<section class="row justify-content-center">
				<form class="form-container" method="post" enctype="multipart/form-data">
					<p class="page-blob">Please select a photo!</p>
					<div class="form-row">
						<div class="form-group">
							<input type="file" name="image" />
							</div>	
							<div class="form-group">
								<input type="submit" name="submit" value="upload" />
							</div>
						</div>
					</div>
				</form>
			</section>
		
		<?php
			if(isset($_POST['submit']))
			{
				if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
				{
					echo "please select an image";
				}
				else
				{
					$image= addslashes($_FILES['image']['tmp_name']);
					$name= addslashes($_FILES['image']['name']);
					$image= file_get_contents($image);
					$image= base64_encode($image);
					saveimage($name, $image);
				}
			}
			displayimage();
			function saveimage($name, $image)
			{
				//Connect to mysql server
				$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD,DB_DATABASE);
				if ($conn->connect_error) die($conn->connect_error);
				$qry = "INSERT INTO images(name, image, fk_user_id) VALUES('$name', '$image','2')";
				$result = $conn->query($qry);
				if (!$result) die ("Database access failed: " . $conn->error);
			}
			
			function displayimage()
			{
				$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD,DB_DATABASE);
				if ($conn->connect_error) die($conn->connect_error);
				$qry = "SELECT * FROM images";
				$result = $conn->query($qry);
				if (!$result) die ("Database access failed: " . $conn->error);
				$rows = $result->num_rows;
				//Check whether the query was successful or not
				if (!$result) die ("Database access failed: " . $conn->error);
				else{
					for($j=0;$j<$rows;++$j)
						{
							$row = $result->fetch_array(MYSQLI_ASSOC);
							echo '<img alt="'.$row['name'].'" height="200" width="200" src="data:image;base64,'.$row['image'].' "> ';
						}
					}
					
			
				//mysql_close(%conn);
			}
		?>
		</section>
		<footer class="container-fluid text-center fixed-bottom">
		  <p>WELCOME</p>
	</footer>

	</body>
</html>
					