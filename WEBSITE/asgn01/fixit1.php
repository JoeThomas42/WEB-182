<!DOCTYPE html>
<!--Author:
	Date:
	File:	  fixit1.php
	Purpose:  The gameScores array stores four game scores, using 
	the player names as keys. When we try to print Mary's score 
	we get 0. What's wrong here?
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
		
		print("<p>Mary's score is ".$gameScores['Mary']."</p>");

	?>
</body>
</html>
