<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Covid-19 India | Live Update</title>

	<!-- Bootstrap cdn -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<!-- Mystylesheet -->
	<link rel="stylesheet" href="css/style.css">

	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">

	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/554c424e1c.js" crossorigin="anonymous"></script>

  <!-- scroll  -->
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
    <h1 class="text-danger">Covid-19 India Live Updates</h1>
    <h5 class="text-success">"Stay Home Stay Safe" Lets Fight Against Corona Virus Together</h5>
  </div>

  <?php include ('logic-india.php');?>

  <div class="container my-5">
    <div class="row text-center">
      
      <div class="col-2 text-warning">
        <h5>India Total</h5>
        <?php echo $indiadata['statewise'][0]['confirmed']; ?>
      </div>
      
      <div class="col-2 text-success">
        <h5>Tot. Recovered</h5>
        <?php echo $indiadata['statewise'][0]['recovered']; ?>
      </div>
      
      <div class="col-2 text-danger">
        <h5>Tot. Deaths</h5>
        <?php echo $indiadata['statewise'][0]['deaths']; ?>
      </div>

      <div class="col-2 text-warning">
        <h5>New Cases</h5>
        <?php echo $indiadata['statewise'][0]['deltaconfirmed']; ?>
      </div>

      <div class="col-2 text-info">
        <h5>Tot. Active</h5>
        <?php echo $indiadata['statewise'][0]['active']; ?>
      </div>

      <div class="col-2 text-danger">
        <h5>New Deaths</h5>
        <?php echo $indiadata['statewise'][0]['deltadeaths']; ?>
      </div>
    
    </div>
  </div>

  <div class="container bg-light p-3 my-3 text-center">
    <h5 class="text-info">Be a Responsible Citizen, Save Your Country & its Citizens.</h5>
    <p class="text-muted">Stay Home Keep Your Family Safe.</p>
  </div>
  
  <div class="table-responsive">
    <div class="container-fluid table-responsive">
      <table class="table table-bordered" id="table_data">
        <tr>
          <th scope="col">Last Update</th>
          <th scope="col">State</th>
          <th scope="col">Total Confirmed</th>
          <th scope="col">Total Active</th>
          <th scope="col">Total Recovered</th>
          <th scope="col">New Recovered</th>
          <th scope="col">New Cases</th>
          <th scope="col">Total Deaths</th>
          <th scope="col">New Deaths</th>
        </tr>

        <?php 

          $data = file_get_contents("https://api.covid19india.org/data.json");
          $indiadata = json_decode($data, true);

          $stateCount = count($indiadata['statewise']);

          $i = 1;
          while($i < $stateCount){

        ?>
        <tr>
          <td id="update"><?php echo $indiadata['statewise'][$i]['lastupdatedtime']; ?></td>
          <td id="state"><?php echo $indiadata['statewise'][$i]['state']; ?></td>
          <td id="confirmed"><?php echo $indiadata['statewise'][$i]['confirmed']; ?></td>
          <td id="active"><?php echo $indiadata['statewise'][$i]['active']; ?></td>
          <td id="recovered"><?php echo $indiadata['statewise'][$i]['recovered']; ?></td>
          <td id="deltarecovered"><?php echo $indiadata['statewise'][$i]['deltarecovered']; ?></td>
          <td id="deltaconfirmed"><?php echo $indiadata['statewise'][$i]['deltaconfirmed']; ?></td>
          <td id="deaths"><?php echo $indiadata['statewise'][$i]['deaths']; ?></td>
          <td id="deltadeaths"><?php echo $indiadata['statewise'][$i]['deltadeaths']; ?></td>
        </tr>

      <?php
          $i++;
        }

      ?>
      
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
  <!-- <script src="js/main.js"></script>-->


</body>
</html>