<?php
    require_once('auth.php');
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- local css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <title>My Account</title>
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
		<section class="container-fluid bg">
		<section class="row justify-content-center">
			<section class="col-12 col-sm-6 col-md-3">
				<form class="form-container register" action="my_account_update.php">
					<div class="form-group">
						  <label for="Email">Email: <?php echo $_SESSION['SESS_EMAIL']?></label>					  
					</div>
						<div class="form-group">
						  <label for="password">Password: <?php echo $_SESSION['SESS_PASSWORD']?></label>					  
						</div>						
					</div>
						<div class="form-group">
							<label for="familyname">Group Name: <?php echo $_SESSION['SESS_GROUP_NAME']?></label>							
						</div>
						</div>					
						<div class="form-group">
							<label for="first-name">First Name: <?php echo $_SESSION['SESS_FNAME']?></label>							
						</div>
						<div class="form-group">
							<label for="surname">Surname: <?php echo $_SESSION['SESS_SNAME']?></label>						
						</div>
					</div>
						<div class="form-group">
							<label for="Address">Address1: <?php echo $_SESSION['SESS_ADDRESS1']?></label>							
						</div>
						<div class="form-group">
							<label for="Address2">Address2: <?php echo $_SESSION['SESS_ADDRESS2']?></label>							
						</div>				
						<div class="form-group">
							<label for="City">City-Town: <?php echo $_SESSION['SESS_CITY']?></label>							
						</div>
						<div class="form-group">
							<label for="County">County: <?php echo $_SESSION['SESS_COUNTY']?></label>							
						</div>
					 </div>
					  <button type="submit" class="btn btn-primary">EDIT</button>
				</form>
			</section>
		</section>
	</section>	
	<footer class="container-fluid text-center">
		  <p>Footer Text</p>
	</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
