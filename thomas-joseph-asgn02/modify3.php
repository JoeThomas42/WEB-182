<!DOCTYPE html>
<!--
  Author:   Joseph Thomas
  Date:     
  File:	    modify3.php
  Purpose:  Chapter 13 Exercise

  modify3.html asks the user to submit their hours worked and pay rate.
  modify3.php uses functions from the inc-wage-functions.php file to
  calculate the wage and bonus. The program also calls a function
  named getOvertimeHours() in order to display the number of overtime
  hours worked. However this function does not exist!

  Modify inc-wage-functions.php by adding this function. The function
  should be designed to receive the hours worked and return the
  number of overtime hours. If the hours worked is 40 or less,
  the function should return 0, otherwise the function should return
  the the result of subtracting 40 from the hours worked.
-->

<html>
  <head>
    <title>Modify3</title>
    <link rel="stylesheet" href="sample.css">
  </head>

  <body>
    <h1>Modify3</h1>

    <?php
      include("inc-wage-functions.php");

      $hoursWorked = $_POST["hoursWorked"];
      $hourlyWage = $_POST["hourlyWage"];

      $wage = getWage($hourlyWage, $hoursWorked);
      $bonus = getBonus($wage);
      $overtimeHours = getOvertimeHours($hoursWorked);

      print("<p>Your hourly wage is $$hourlyWage and you worked $hoursWorked hours.</p>");
      print("<p>Your wages are $$wage.</p>");
      print("<p>Your bonus is $$bonus.</p>");
      print("<p>You worked $overtimeHours hours of overtime.</p>");
    ?>
  </body>
</html>
