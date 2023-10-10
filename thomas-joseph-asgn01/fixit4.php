<!DOCTYPE html>
<!--Author:
	Date:
	File:	  fixit4.php
	Purpose:  The gamePlayers array stores the characters of four game 
	players, using the player names as keys. The application is supposed 
	to display Christine's character but it displays nothing. 
	Can you fix this code?
-->

<html>
<head>
	<title>GAME CHARACTERS</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>GAME CHARACTERS</h1>

	<?php
		$gamePlayers['Bob'] = "human";
		$gamePlayers['Mary'] = "dragon";
		$gamePlayers['Christine'] = "wizard";
		$gamePlayers['Joe'] = "dwarf";

		print("<p>Christine is a ".$gamePlayers['Christine']."</p>");
	?>
</body>
</html>
