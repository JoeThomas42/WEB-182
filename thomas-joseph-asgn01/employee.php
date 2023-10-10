<!DOCTYPE html>
<!--	
	Author:
	Date:
	File:    employee.php
	Purpose: Chapter 12 Exercise
-->

<html>
<head>
	<title>Employee Lookup</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
	<?php

		$salaries = [
      '12345' => 54555.00,
      '12346' => 32765.50,
      '12347' => 18743.00,
      '12348' => 52325.00,
      '12349' => 83296.75,
			'12350' => 45515.25,
      '12351' => 61765.50,
      '12352' => 73225.00,
      '12353' => 31155.00,
      '12354' => 28245.00
    ];

		$employees = [
      '12345' => "Mary Smith",
      '12346' => "David King",
      '12347' => "John Smith",
      '12348' => "Chris Anderson",
      '12349' => "Andy Wells",
			'12350' => "Anne Johnson",
      '12351' => "Samuel Tennyson",
      '12352' => "Gwendolyn Jones",
      '12353' => "Catherine Doughty",
      '12354' => "Joseph Johnson"
    ];

		$empID = $_POST['empID'];

		print ("<h1>Employee Lookup</h1>");
    print ("<p>Employee ".$empID." is ".$employees[$empID].", with a salary of $".number_format($salaries[$empID], 2)."</p>");
		
	?>

</body>
</html>
