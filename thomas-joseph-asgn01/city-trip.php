<!DOCTYPE html>
<!--	
	Author:
	Date:
	File: city-trip.php
	Purpose: Chapter 12 Exercise
-->

<html>
<head>
	<title>City Trip</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
	<?php
	
		$distances = [
      'Atlanta' => 880,
      'Boston'  => 225,
      'Chicago' => 788,
      'Detroit' => 614,
      'Miami'   => 1275
    ];

    $mpg = $_POST['mpg'];
    $costPerGallon = $_POST['costPerGallon'];
    $city = $_POST['city'];

    $cost = $distances[$city] / $mpg * $costPerGallon;

    print ("<p>The cost to drive ".$distances[$city]." miles to ".$city." is \$".number_format($cost, 2)."</p>");
	?>

</body>
</html>
