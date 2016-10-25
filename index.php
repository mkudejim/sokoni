<!DOCTYPE html>
<html> 
<head>
	<link rel="stylesheet" href="sokoni.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="JS/index.js"></script>
	<title>Sokoni</title>
</head>

<body class="body">
	<div class="top">
		<div class="row">
			<div class="col-md-2" id="top_side">
				<p>SOKONI</p>
			</div>
			<div class="col-md-1">
				<a href="index.php">Home</a>
			</div>

			<div class="col-md-1">
				<a href="">Profile</a>
			</div>

			<div class="col-md-1">
				<a href=""> Buy </a>
			</div>

			<div class="col-md-1">
				<a href="">Sell</a>
			</div>

			<div class="col-md-1">
				<a href="">Careers</a>
			</div>

			<div class="col-md-1">
				<a href=""> About </a>
			</div>


			<div class="col-md-4">
				<div class="bar">
					<form class="form-inline">
						<div class="form-group">
							<label for="search"></label>
							<input type="text" class="form-control" id="item">
							<button type="submit" class="btn btn-default">Search</button>
						</div>
					</form>
				</div>
			</div>

		</div>

	</div>

	<div class="row contents" id="cont">
		<div class="col-md-2 side">
		</div>

		<div class="col-md-8">

			<div class="pics">

				<div class="row img_row">
					<div class="col-md-12">
						<p> <a href="game.php" style="font-size: 32px; text-decoration: none; padding: 10px; background-color: gold; border-radius: 15px;">
							Play tic tac toe
						</a> </p>
					</div>

				</div>

				<div class="row img_row">
					<div class="col-md-4">
						<p>Image here.</p>
						<img src="images/iphone7.jpg" class="img-rounded" alt="PS5.jpg" width="304" height="236">
					</div>

					<div class="col-md-4">
						<p>Image here.</p>
						<img src="images/ps5.jpg" class="img-rounded" alt="PS5.jpg" width="304" height="236">
					</div>

					<div class="col-md-4">
						<p>Image here.</p>
						<img src="images/iphone7.jpg" class="img-rounded" alt="PS5.jpg" width="304" height="236">
					</div>
				</div>

				<div class="row img_row">
					<div class="col-md-4">
						<p>Image here.</p>
						<img src="images/ps5.jpg" class="img-rounded" alt="PS5.jpg" width="304" height="236">
					</div>

					<div class="col-md-4">
						<p>Image here.</p>
						<img src="images/iphone7.jpg" class="img-rounded" alt="PS5.jpg" width="304" height="236">
					</div>

					<div class="col-md-4">
						<p>Image here.</p>
						<img src="images/ps5.jpg" class="img-rounded" alt="PS5.jpg" width="304" height="236">
					</div>
				</div>

				<div class = "buttons">
					<div class="row">
						<div class="col-md-6">
							<p> <a href="">Login</a> </p>
						</div>

						<div class="col-md-6">
							<p> <a href="">Sign up</a> </p>
						</div>
					</div>

				</div>

			</div>

		</div>

		<div class="col-md-2 side">
		</div>
	</div>


	<script>
		setDivHeightToWndwSize("cont");
	</script>


	<div class="navbar navbar-default navbar-fixed-bottom">
		<div class="container">
			<p class="navbar-text pull-left">© 2016 Sokoni By Jimmy Mkude and Arnold Mutayoba
				<a href="http://mkude.com" target="_blank" >mkude.com</a>
			</p>

			<a href="" class="navbar-text pull-right"> About Us </a>
		</div>




</body>
</html>

