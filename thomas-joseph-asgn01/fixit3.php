<!DOCTYPE html>
<!--Author:
	Date:
	File:	  fixit3.php
	Purpose:  The gameScores array stores four game scores, using 
	the player names as keys. The application is supposed to add
	Bob and Joe's scores and display the result. Can you fix this code?
-->

<html>
<head>
	<title>GAME SCORES</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>GAME SCORES</h1>

	<?php
		$gameScores['Bob'] = 75;
		$gameScores['Mary'] = 25;
		$gameScores['Christine'] = 125;
		$gameScores['Joe'] = 80;

		$combinedScore =  $gameScores['Bob'] + $gameScores['Joe'];

		print("<p>The combined score of Bob and Joe is $combinedScore</p>");

	?>
</body>
</html>
