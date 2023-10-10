<!DOCTYPE html>
<!--	Author:
		Date:
		File: lookup.php
		Purpose: Chapter 13 Exercise
-->

<html>
<head>
	<title>Performance Lookup</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
	<?php
		function getPerformanceDate ($performance)
		{
			if ($performance == "Rolling Stones")
				return "1/15/2011";
			elseif ($performance == "Cold Play")
				return "1/31/2011";
			elseif ($performance == "Lady GaGa")
				return "2/15/2011";
			elseif ($performance == "Mumford & Sons")
				return "2/28/2011";
			elseif ($performance == "Emmylou Harris")
				return "3/15/2011";
		}

		$performance = $_POST['performance'];

		// Use a single line of code to call the getPerformanceDate() function 
		// in order to obtain the date of the requested performance and assign this to a variable
		// named $performanceDate
				
    $performanceDate = getPerformanceDate($performance);
		
		print ("<h1>$performance</h1>");	
		print ("<p>DATE: $performanceDate</p>");
		
	?>

</body>
</html>
