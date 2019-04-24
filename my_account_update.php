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
				<form class="form-container register" method="post" action="my_account_update_exec.php">
					<div class="form-group">
						  <label for="inputEmail">Email</label>
						  <input name="email" required type="email" class="form-control" id="inputEmail" value=<?php echo $_SESSION['SESS_EMAIL']?>>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
						  <label for="input-password">Old Password</label>
						  <input name="old_password" type="password" class="form-control" id="inputPassword" placeholder="Old Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
						</div>
					<div class="form-row">
						<div class="form-group col-md-6">
						  <label for="input-password">New Password</label>
						  <input name="new_password" type="password" class="form-control" id="inputPassword" placeholder="New Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
						</div>
						<div class="form-group col-md-6">
						  <label for="confirm_Password">Confirm Password</label>
						  <input name="cpassword" type="password" class="form-control" id="inputPassword4" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
						</div>
					</div>
						<div class="form-group">
							<label for="inputfamilyname">Group Name</label>
							<input name="family_name" required type="text" class="form-control" id="Family Name" value=<?php echo $_SESSION['SESS_GROUP_NAME']?>>
						</div>
						</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="first-name">First Name</label>
							<input name="fname" required type="text" class="form-control" id="First Name" value=<?php echo $_SESSION['SESS_FNAME']?>>
						</div>
						<div class="form-group col-md-6">
							<label for="surname">Surname</label>
							<input name="sname" type="text" class="form-control" id="Surname" value=<?php echo $_SESSION['SESS_SNAME']?>>
						</div>
					</div>
						<div class="form-group">
							<label for="inputAddress">Address1</label>
							<input name="address1" required type="text" class="form-control" id="inputAddress" value=<?php echo $_SESSION['SESS_ADDRESS1']?>>
						</div>
						<div class="form-group">
							<label for="inputAddress2">Address2</label>
							<input name="address2" required type="text" class="form-control" id="inputAddress2" value=<?php echo $_SESSION['SESS_ADDRESS2']?>>
						</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputCity">City-Town</label>
							<input name="city_town" required type="text" class="form-control" id="inputCity" value=<?php echo $_SESSION['SESS_CITY']?>>
						</div>
						<div class="form-group col-md-4">
							<label for="inputCounty">County</label>
							<input name="county" required type="text" class="form-control" id="inputCounty" value=<?php echo $_SESSION['SESS_COUNTY']?>>
						</div>
					 </div>
					  <button type="submit" class="btn btn-primary">Update</button>
				</form>
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
