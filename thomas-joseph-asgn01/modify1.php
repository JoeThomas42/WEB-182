<!DOCTYPE html>
<!--Author:
	Date:
	File:	modify1.php
	Purpose:Chapter 12 Exercise

	This applications displays a table containing a game player's name,
	game character, and score. Modify this code so that it first creates
	an associative array named $playerInfo and stores the values "Christine",
	"Wizard", and 345 into elements named 'name', 'character', and 'score'.

	Now modify the print statement so that it uses the $playerInfo array to 
	obtain the values for the second column of each row.

	modify1.html does not need to be changed.
-->
<html>
<head>
	<title>Modify Exercise</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>PLAYER REPORT</h1>

	<?php
	
    $playerInfo = [
      'name'      => 'Christine',
      'character' => 'Wizard',
      'score'     => 345
    ];

		print ("<table>");
		print("<tr><td>Player Name</td><td>".$playerInfo['name']."</td></tr>");
		print("<tr><td>Player Character</td><td>".$playerInfo['character']."</td></tr>");
		print("<tr><td>Player Score</td><td>".$playerInfo['score']."</td></tr>");
		print ("</table>");

	?>
</body>
</html>
