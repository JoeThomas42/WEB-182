<!DOCTYPE html>
<!--Author:
	Date:
	File:	modify3.php
	Purpose:Chapter 12 Exercise

	modify3.html provides the user with a form to submit the name of a game player. 
	modify3.php contains an array that stores the game characters of each player,
	indexed by the player names. The application receives the name submitted by the
	user and uses an IF..ELSE structure to display the correct game character. 
	Modify this by replacing the entire IF..ELSE structure with a single statement 
	that looks up the game character using the $playerName variable and assigns 
	the correct character to the $character variable. 
	You do not need to change modify3.html.

-->
<html>
<head>
	<title>Modify 3</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>Modify 3</h1>

	<?php
		$gamePlayers['Bob'] = "human";
		$gamePlayers['Mary'] = "dragon";
		$gamePlayers['Christine'] = "wizard";
		$gamePlayers['Joe'] = "dwarf";

		$playerName = $_POST['playerName'];
		
		print("<p>$playerName is a $gamePlayers[$playerName].</p>");
	?>
</body>
</html>
