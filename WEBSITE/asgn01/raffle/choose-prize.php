<?php
	session_start();
?>
<!--	Author:
		Date:
		File:	choose-prize.php
		Purpose: Example of a Web Session

-->

<html>
<head>
	<title>RAFFLE</title>
	<link rel ="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
<?php
	if (isset($_POST['prize']) and isset($_SESSION['fullName']))
	{
	$prize = $_POST['prize'];

	print("<h1>".$_SESSION['fullName'].", you chose:<br> $prize!</h1>");
	print("<p>Bring your ticket to our <strong>".$_SESSION['city']."</strong> store and we will have your prize ready for you!</p>");
	print ("<p>Would you like to keep your $prize, or you can risk it all and go for the <a href=\"mystery-prize.php\"> Mystery Prize!!</a>");
	}
	// Need to delete the session_destroy otherwise you will not have access to your session data
	//session_destroy();
?>
</body>
</html>
