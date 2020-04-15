<?php 

	$data = file_get_contents("https://api.covid19india.org/data.json");
	$indiadata = json_decode($data, true);

	$stateCount = count($indiadata['statewise']);
	// echo $stateCount;


	// $totalConfirmed = $indiadata['statewise'][0]['confirmed'];
	// $totalRecovered = $indiadata['statewise'][0]['recovered'];
	// $totalDeaths = $indiadata['statewise'][0]['deaths'];

	// $newCases = $indiadata['statewise'][0]['deltaconfirmed'];
	// $totalActive = $indiadata['statewise'][0]['active'];
	// $newDeaths = $indiadata['statewise'][0]['deltadeaths'];

	// echo $totalConfirmed ."<br>";
	// echo $totalRecovered."<br>";
	// echo $totalDeaths."<br>";

	// echo $newCases ."<br>";
	// echo $totalActive."<br>";
	// echo $newDeaths."<br>";

	

?>