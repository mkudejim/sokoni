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
				<a href="profile.php">Profile</a>
			</div>

			<div class="col-md-1">
				<a href="orders.php"> Buy </a>
			</div>

			<div class="col-md-1">
				<a href="login.php">Sell</a>
			</div>

			<div class="col-md-1">
				<a href="careers.php">Careers</a>
			</div>

			<div class="col-md-1">
				<a href="about.php"> About </a>
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
			<p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
			</p>
			<div class = "buttons">
				<p>
					<a href="login.php">Login</a>
				</p>

				<p>
					<a href="signup.php">Sign up</a>
				</p>
			</div>
		</div>

		<div class="col-md-2 side">
		</div>
	</div>

	<script>
		setDivHeightToWndwSize("cont");
	</script>



</body>
</html>

