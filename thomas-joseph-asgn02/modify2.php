<!DOCTYPE html>
<!--
  Author:   Joseph Thomas
  Date:     
  File:	    modify2.php
  Purpose:  Chapter 13 Exercise

  modify2.html provides a Submit button to display a table of
  pay increases. The current version of modify2.php uses a for loop
  to display pay increases of people earning between $8.00 and $25.00
  an hour. It calculates the pay increases directly without using
  functions.

  Change modify2.php so that it uses the getNewHourlyWage() function
  that is provided in the inc-wage-functions.php file instead of
  performing this calculation directly.
  Be sure to add the required include statement!
-->
<html>
  <head>
    <title>Modify2</title>
    <link rel="stylesheet" href="sample.css">
  </head>

  <body>
    <h1>Modify2</h1>

    <?php
      include("inc-wage-functions.php");

      $payIncrease = 0.10;

      print("<table>");
      print("<tr><td><strong>Current Pay Rate</strong></td><td><strong>New Pay Rate</strong></td></tr>");
      
      for($hourlyWage = 8.00; $hourlyWage <= 25.00; $hourlyWage++){
        $newHourlyWage = getNewHourlyWage($hourlyWage, $payIncrease);
        print("<tr><td>$".number_format($hourlyWage, 2)."</td><td>$".number_format($newHourlyWage, 2)."</td></tr>");
      }

      print("</table");
    ?>
  </body>
</html>
