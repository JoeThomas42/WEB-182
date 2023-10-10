<!DOCTYPE html>
<!--
  Author:   Joseph Thomas
  Date:     
  File:	    fixit3.php
  Purpose:  What's wrong here? The getWage() and getBonus()
            functions are provided in a file named
            inc-wage-functions.php. This program uses the getWage()
            function just fine but the call to the getBonus()
            function isn't returning the correct bonus. It should
            be 75.00 not 50.00. Can you fix it?
-->

<html>
  <head>
    <title>Wage Report</title>
    <link rel="stylesheet" href="sample.css">
  </head>

  <body>
    <h1>WAGE REPORT</h1>

    <?php
      include("inc-wage-functions.php");

      $hourlyWage = 12.75;
      $hoursWorked = 45;
      $wage = getWage($hourlyWage, $hoursWorked);
      $bonus = getBonus($wage);

      print("<p>Your hourly wage is $$hourlyWage and you worked $hoursWorked hours.</p>");
      print("<p>Your wages are $$wage.</p>");
      print("<p>Your bonus is $$bonus.</p>");
    ?>
  </body>
</html>
