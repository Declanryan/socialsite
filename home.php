 <?php 
   require_once('auth.php');// check authorisation
   require_once('functions.php');
   // set cookie
   $cookie_name = "example";
   $cookie_value = "John Doe";
   $cookie_time = time();
   setcookie($cookie_name, $cookie_value, $cookie_time, "/"); 

echo <<<_INIT
<!DOCTYPE html> 
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="javascript/functions.js"></script>

_INIT;
    $user    = $_SESSION['SESS_FNAME'];// set name of user   
   
echo <<<_MAIN
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
_MAIN;

echo <<<_LOGGEDIN
       <section class="container">   
		<div class="row">
			<div class="col-md-7">
				<h1 class="my-4">Welcome $user</h1>
				<div class="card mb-4">
					<div class="card-body">
						<form method="post" action="home_exec.php"> 
							<p class="page-blob">What would you like to say?</p>
							<div class="form-group">
								<input name="post_text" type="text" class="form-control" id="input_text"  placeholder="Hello World">
								<br>
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>	 						
						 </form>
					</div>
				</div>
				<div class="card mb-4">	
				  <div class="card-body">
					
					
_LOGGEDIN;

showMessages($_SESSION['SESS_MEMBER_ID']);

ECHO <<<_END
					
				  </div>
				 
				</div>
				<div>			 
				  <div>	
				  </div>
				</div>
			  </div>
			  
			  <!-- Sidebar Widgets Column -->
			  <div class="col-md-5">
				<!-- Categories Widget -->
				<div class="card my-4">
				  <h6 class="card-header"><p>Links Pannel</p></h6>
				  <div class="card-body">
					<div class="row">
					  <div class="col-lg-6">
						<ul class="list-unstyled mb-0">
						  <li>
							<a href="photo_upload.php">Photo upload</a>
						  </li>
						  <li>
							<a href="#">Link</a>
						  </li>
						  <li>
							<a href="#">Link</a>
						  </li>
						</ul>
					  </div>
					  <div class="col-lg-6">
						<ul class="list-unstyled mb-0">
						  <li>
							<a href="#">Link</a>
						  </li>
						  <li>
							<a href="#">Link</a>
						  </li>
						  <li>
							<a href="#">Link</a>
						  </li>
						</ul>
					  </div>
					</div>
				  </div>
				</div>
				<!-- Side Widget -->
				<div class="card my-4">
				  <h5 class="card-header">group members</h5>
				  <div class="card-body">
					TODO-show group members online
				  </div>
				</div>
				
				<!-- Side Widget -->
				<div class="card my-4">
				  <h5 class="card-header">live chat</h5>
				  <div class="card-body">
				  
					TODO-instsant chat feature
				  </div>
				</div>
			</div>
		</div>
	</section>	
	<footer class="container-fluid text-center fixed-bottom">
		  <p>WELCOME</p>
	</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
 </body>
</html>
_END;
?>
