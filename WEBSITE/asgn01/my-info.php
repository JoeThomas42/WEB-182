<!DOCTYPE html>
<!--Author:
	Date:
	File:	 my-info.php
	Purpose: Chapter 12 Exercise
	
-->

<html>
<head>
	<title>My Address</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<?php		
  
  $myInfo = [
    'firstName' => 'Joe',
    'lastName' => 'Thomas',
    'address'  => '123 Main St.',
    'city'     => 'Asheville',
    'state'    => 'NC',
    'zip'      => '12345',
    'email'    => 'josephrthomas@students.abtech.edu',
    'phone'    => '123-456-7890'
    ];
		
    print("<p>".$myInfo['firstName']." ".$myInfo['lastName'].",<br>"
      .$myInfo['address'].",<br>"
      .$myInfo['city'].", ".$myInfo['state']." ".$myInfo['zip'].",</p>");

	?>
</body>
</html>
