<!DOCTYPE html>
<!--	Author: 
		Date:	
		File:	raises.php
		Purpose:MySQL Exercise
-->

<html>
<head>
	<title>MySQL Query</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
<?php

include_once 'incConnectMySQL.php';

$connect=mysqli_connect($server, $user, $pw, $db);

if( !$connect) 
{
	die("ERROR: Cannot connect to database $db on server $server 
	using user name $user (".mysqli_connect_errno().
	", ".mysqli_connect_error().")");
}
$userQuery = "SELECT empID FROM personnel WHERE hourlyWage < 10.00"; // ADD THE QUERY

$result = mysqli_query($connect, $userQuery);

if (!$result) 
{
	die("Could not successfully run query ($userQuery) from $db: " .	
		mysqli_error($connect) );
}

if (mysqli_num_rows($result) == 0) 
{
	print("No records found with query $userQuery");
}
else 
{ 
	print("<h1>LIST OF EMPLOYEES WHO NEED A RAISE</h1>");

	// ADD CODE HERE
  while ($row = mysqli_fetch_array($result)) {
    print("<p>Employee ".$row['empID']." needs a raise!</p>");
  }

}

mysqli_close($connect);   // close the connection
 
?>

</body>
</html>
