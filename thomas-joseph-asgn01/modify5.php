<!DOCTYPE html>
<!--Author:
	Date:
	File:	modify5.php
	Purpose:Chapter 12 Exercise

	modify5.php contains an array that stores the game scores of four players,
	indexed by the player names. The application calculates the total of the four
	scores, then calculates and displays the average score.  
	Modify this code so that it uses a FOREACH loop to calculate the value for $totalScore.
	You do not need to change modify5.html.

-->
<html>
<head>
	<title>Modify 5</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>Modify 5</h1>

	<?php
		$gameScores['Bob'] = 125;
		$gameScores['Mary'] = 75;
		$gameScores['Christine'] = 95;
		$gameScores['Joe']= 105;
    
    $totalScore = 0;

    foreach ($gameScores as $playerName => $score) {
      $totalScore += $score;
    }

		$averageScore = $totalScore / sizeof($gameScores);

		print("<p>The average game score is $averageScore.</p>");
	?>
</body>
</html>
