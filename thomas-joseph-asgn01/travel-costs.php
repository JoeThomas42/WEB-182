<!DOCTYPE html>
<!--Author:
	Date:
	File:	 travel-costs.php
	Purpose: Chapter 12 Exercise
	
-->

<html>
<head>
	<title>TRAVEL COSTS</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<?php
		$destination = $_POST['destination'];
		
    $airFare = [
      'Barcelona' => 875.00,
      'Cairo'     => 950.00,
      'Rome'      => 875.00,
      'Santiago'  => 820.00,
      'Tokyo'     => 1575.00
    ];

		$hotel = [
      'Barcelona' => 85.00,
      'Cairo'     => 98.00,
      'Rome'      => 110.00,
      'Santiago'  => 85.00,
      'Tokyo'     => 240.00
    ];

		$farePerPerson = $airFare[$destination];
		$hotelPerNight = $hotel[$destination];
		
		print ("<h1>TRAVEL COSTS for $destination</h1>");
		print ("<p>The air fare is $".number_format($farePerPerson, 2)." per person</p>");
		print ("<p>The hotel rates are $".number_format($hotelPerNight, 2)." per 
					night.</p>");
	?>
</body>
</html>
