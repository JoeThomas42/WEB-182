<!DOCTYPE html>
<!--	Author:
		Date:
		File:	bus-travel.php
		Purpose: Chapter 13 Exercise

-->

<html>
<head>
	<title>BUSINESS TRAVEL</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
	<?php
		include ("inc-travel-allowances.php");
		$tripDate = $_POST['tripDate'];
		$miles = $_POST['miles'];		
		$breakfast = $_POST['breakfast'];
		$lunch = $_POST['lunch'];
		$dinner = $_POST['dinner'];		
		$hotel = $_POST['hotel'];

		$carUse = $miles * getMileageAllowance();
		
		if ($breakfast == "YES")
			$breakfastAllowance = getBreakfastAllowance();
		else
			$breakfastAllowance = 0.0;
		if ($lunch == "YES")
			$lunchAllowance = getLunchAllowance();
		else
			$lunchAllowance = 0.0;
		if ($dinner == "YES")
			$dinnerAllowance = getDinnerAllowance();
		else
			$dinnerAllowance = 0.0;
		if ($hotel == "YES")
			$hotelAllowance = getHotelAllowance();
		else
			$hotelAllowance = 0.0;

		$total = $carUse + $breakfastAllowance + $lunchAllowance + $dinnerAllowance + $hotelAllowance ;
			
		print ("<h1>BUSINESS TRAVEL REIMBURSEMENT FORM</h1>");
		print ("<table><tr><td>CAR USE:</td><td>$".number_format($carUse,2)."</td</tr>
			<tr><td>BREAKFAST ALLOWANCE:</td><td>$".number_format($breakfastAllowance,2)."</td</tr>
			<tr><td>LUNCH ALLOWANCE:</td><td>$".number_format($lunchAllowance,2)."</td</tr>
			<tr><td>DINNER ALLOWANCE:</td><td>$".number_format($dinnerAllowance,2)."</td</tr>
			<tr><td>HOTEL ALLOWANCE:</td><td>$".number_format($hotelAllowance,2)."</td</tr>
			<tr><td><strong>TOTAL REIMBURSEMENT:</strong></td><td><strong>$".number_format($total,2)."</strong></td</tr></table>");
	?>

</body>
</html>
