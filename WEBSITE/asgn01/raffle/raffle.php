<?php
	session_start();
?>
<!--	Author:
		Date:
		File:	raffle.php
		Purpose: Example of a Web Session

-->

<html>
<head>
	<title>RAFFLE</title>
	<link rel ="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
<?php
	$_SESSION['fullName'] = $_POST['fullName'];
	$_SESSION['city'] = $_POST['city'];
	$ticketNum = $_POST['ticketNum'];

	if ($ticketNum == "45678")
	{
		print("<h1>".$_SESSION['fullName'].", you won !!!</h1>");
		print("<form action = \"choose-prize.php\" method = \"post\" >
				<p>First choose a prize: 
				<select name = \"prize\"> 
				<option>A New TV</option>
				<option>A New Laptop</option>
				<option>A New Refrigerator</option>
				</select></p>
			<p><input type = \"submit\" value = \"Click Here to Learn How to Obtain Your Prize\"></p></form>");
	}
	else 
		print("<h1>Sorry ".$_SESSION['fullName'].", you didn't win anything - better luck next time..</h1>");
?>	
</body>
</html>
