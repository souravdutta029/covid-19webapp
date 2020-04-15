<?php

	$getdata = file_get_contents("https://api.covid19api.com/summary");
	$coronadata = json_decode($getdata, true);   // converting into json format.

	$TotalConfirmed = $coronadata['Global']['TotalConfirmed'];
	$TotalRecovered = $coronadata['Global']['TotalRecovered'];
	$TotalDeaths    = $coronadata['Global']['TotalDeaths'];
?>