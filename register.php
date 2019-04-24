<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <title>REGISTER</title>
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
							<a class="nav-link" href="index.php">Login <span class="sr-only">(current)</span></a>
						</li>
					</ul>
				<form class="form-inline my-2 my-lg-0" action="http://www.google.co.uk/search?hl=en-GB&source=hp&q=">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" value="" name="q" id="s">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</nav>
	</header>
		
	<section class="container-fluid bg">
		<section class="row justify-content-center">
			<section class="col-12 col-sm-6 col-md-3">
				<form class="form-container register" method="post" action="register_exec.php">
					<div class="form-group">
						  <label for="inputEmail">Email</label>
						  <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email" required>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
						  <label for="input-password">Password</label>
						  <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
						</div>
						<div class="form-group col-md-6">
						  <label for="confirm_Password">Confirm Password</label>
						  <input name="cpassword" type="password" class="form-control" id="inputPassword4" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
						</div>
					</div>
						<div class="form-group">
							<label for="inputfamilyname">Group Name</label>
							<input name="group_name" type="text" class="form-control" id="Family Name" placeholder="Family Name" required>
						</div>
						</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="first-name">First Name</label>
							<input name="fname" type="text" class="form-control" id="First Name" placeholder="First Name" required>
						</div>
						<div class="form-group col-md-6">
							<label for="surname">Surname</label>
							<input name="sname" type="text" class="form-control" id="Surname" placeholder="Surname" required>
						</div>
					</div>
						<div class="form-group">
							<label for="inputAddress">Address1</label>
							<input name="address1" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
						</div>
						<div class="form-group">
							<label for="inputAddress2">Address2</label>
							<input name="address2" type="text" class="form-control" id="inputAddress2" placeholder="Area" required>
						</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputCity">City-Town</label>
							<input name="city_town" type="text" class="form-control" id="inputCity" placeholder="City-Town" required>
						</div>
						<div class="form-group col-md-4">
							<label for="inputCounty">County</label>
							<input name="county" type="text" class="form-control" id="inputCounty" placeholder="County" required>
						</div>
					 </div>
					  <button type="submit" class="btn btn-primary">Register</button>
				</form>
			</section>
		</section>
	</section>
		
	<footer class="container-fluid text-center">
		  <p>WELCOME</p>
	</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
