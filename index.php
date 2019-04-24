<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- local css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <title>LOGIN</title>
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
					<a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
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
					<form class="form-container login" method="post" action="login_exec.php">
						<p class="page-blob">Welcome to MY FAMILY login.</p>
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input name="email" required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required type="password" class="form-control" id="exampleInputPassword1" placeholder="password">
						</div>
						<button type="submit" class="btn btn-primary btn-block">Submit</button>
						<a class="nav-link" href="register.php">New account sign up</a>
					</form>
				</section>
			</section>
		</section>
		
	<footer class="container-fluid text-center">
		  <p>Welcome</p>
	</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>


