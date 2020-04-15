<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Covid-19 World | Live Update</title>
	<link rel="icon" href="images/logo.png">

	<!-- Bootstrap cdn -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<!-- Mystylesheet -->
	<link rel="stylesheet" href="css/style.css">

	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">

	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/554c424e1c.js" crossorigin="anonymous"></script>

	<!-- scroll -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script>
		$(function () {
    $.scrollUp({
      scrollDistance: 50,
      scrollSpeed: 1000,
      scrollText: 'Top',
    });
    });
	</script>
</head>
<body>

	<!-- Navbar Starts -->

	<div class="container-fluid">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="india-update.php">India Update</a>
      </li>
    </ul>
  </div>
</nav>
	</div>

	<!-- Navbar Ends -->

	<div class="container-fluid bg-light p-5 text-center my-3">
		<h1>Covid-19 World Live Updates</h1>
		<h5 class="text-muted">Web app to keep track of all covid-19 cases around the world</h5>
	</div>
	
	<?php include ('logic.php');?>

	<div class="container my-5">
		<div class="row text-center">
			<div class="col-4 text-warning">
				<h5>Global Confirmed Cases</h5>
				<?php echo $TotalConfirmed; ?>
			</div>
			<div class="col-4 text-success">
				<h5>Global Recovered</h5>
				<?php echo $TotalRecovered; ?>
			</div>
			<div class="col-4 text-danger">
				<h5>Global Deaths</h5>
				<?php echo $TotalDeaths; ?>
			</div>
		</div>
	</div>

	<div class="container bg-light p-3 my-3 text-center">
		<h5 class="text-info">Maintaining Social Distance Is The Only Cure</h5>
		<p class="text-muted">Stay Home Keep Your Family Safe.</p>
	</div>

	<div class="table-responsive">
		<div class="container-fluid">
			<table class="table table-bordered table-striped" id="table_data">
				<tr>
					<th scope="col">Last Update</th>
					<th scope="col">Countries</th>
					<th scope="col">Total Confirmed</th>
					<th scope="col">Total Recovered</th>
					<th scope="col">Total Deaths</th>
					<th scope="col">New Cases</th>
					<th scope="col">New Recovered</th>
					<th scope="col">New Deaths</th>
				</tr>
			</table>
		</div>
	</div>

	
	<footer class="footer mt-auto py-3 bg-light">
	  <div class="container text-center">
	    <span class="text-muted">Copyright &copy; 2020 | Data is sourced from Johns Hopkins CSSE Built by Kyle Redelinghuys</span>
	  </div>
	</footer>
	
	<!-- javascript files -->
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>