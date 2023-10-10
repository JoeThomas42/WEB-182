<!DOCTYPE html>
<!--
  Author: Joseph Thomas
  Date:
  File:	weekly-report.php
  Purpose: Chapter11 Exercise 
-->

<html>

  <head>
    <title>Weekly Report</title>
    <link rel="stylesheet" href="sample.css">
  </head>

  <body>
    <h1>Weekly Report</h1>

    <?php

    $weeklyContracts = array(236.00, 284.00, 148.00, 128.00, 0.00, 110.00, 0.00);
    $total = 0;
    $badDays = 0;

    for ($i = 0; $i < count($weeklyContracts); $i++) {
      $total += $weeklyContracts[$i];

      if ($weeklyContracts[$i] == 0) {
        $badDays++;
      }
    }

    $avgDailyIncome = $total / count($weeklyContracts);

    print("<p>TOTAL INCOME FROM PAINT CONTRACTS: ");
    print("$" . number_format($total, 2) . "</p>");
    print("<p>AVG DAILY INCOME FROM PAINT CONTRACTS: ");
    print("$" . number_format($avgDailyIncome, 2) . "</p>");
    print("<p>NUMBER OF DAYS with NO INCOME: $badDays.</p>");

    ?>

  </body>

</html>
