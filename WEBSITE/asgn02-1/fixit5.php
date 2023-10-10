<!DOCTYPE html>
<!--
  Author:   Joseph Thomas
  Date:     
  File:	    fixit5.php
  Purpose:  What's wrong here? The getWage() function is
            supposed to calculate overtime (time and a half) for
            any hours worked above 40. The function is working
            just fine but when we send the $hoursWorked
            and $hourlyWage from THIS program the function does
            not calculate the overtime as time and a half!
            Can you fix it? The wage should be $605.63 not $573.75
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

      print("<p>Your hourly wage is $$hourlyWage and you worked $hoursWorked hours.</p>");
      print("<p>Your wages are $$wage.</p>");
    ?>
  </body>
</html>
