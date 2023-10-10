<!DOCTYPE html>
<!--Author:
	Date:
	File:	  fixit5.php
	Purpose:  What's wrong here? We want to use an associative array to store 
	our quarterly sale, using the name of each quarter ('quarter1', 'quarter2', 
	etc) as keys and the sale amounts (175, 320, 270, 390) as the values stored 
	in each element. The program runs but the total is 0. What have we done wrong!
-->

<html>
<head>
	<title>Car Sales</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>CAR SALES</h1>

	<?php
		$carsSold['quarter1'] = '175';
		$carsSold['quarter2'] = '320';
		$carsSold['quarter3'] = '270';
		$carsSold['quarter4'] = '390';
		
		$totalSales = $carsSold['quarter1'] + $carsSold['quarter2'] + $carsSold['quarter3'] + $carsSold['quarter4'];
		print("<p>This year we sold $totalSales cars.</p>");
	?>
</body>
</html>
