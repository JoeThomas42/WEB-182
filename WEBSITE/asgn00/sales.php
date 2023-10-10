<!DOCTYPE html>
<!--
  Author: Joseph Thomas
  Date:
  File:	  sales.php 
  Purpose:

-->

<html>

  <head>
    <title>Sales Report</title>
    <link rel="stylesheet" href="sample.css">
  </head>

  <body>
    <?php
 
    $salesFile = fopen("sales-data.txt", "r");
    $nextRecord = trim(fgets($salesFile));
    $smithSales = array();
    $jonesSales = array();
    
    while (!feof($salesFile)) {
      list($name, $sale) = explode(":", $nextRecord);
      
      switch ($name) {
        case "Smith":
          $smithSales[] = $sale;
          break;
        case "Jones":
          $jonesSales[] = $sale;
          break;
      }
          
      $nextRecord = trim(fgets($salesFile));
    }

    fclose($salesFile);
        
    $smithSum = 0;
    $jonesSum = 0;

    //Struggle to not just use array_sum()
    for ($si = 0; $si < count($smithSales); $si++) {
      $smithSum += $smithSales[$si];
    }

    for ($ji = 0; $ji < count($jonesSales); $ji++) {
      $jonesSum += $jonesSales[$ji];
    }

    $smithSalesAmt = sizeof($smithSales);
    $jonesSalesAmt = sizeof($jonesSales);
    $smithAvg = $smithSum / $smithSalesAmt;
    $jonesAvg = $jonesSum / $jonesSalesAmt;

    print("<p>Smith achieved " .$smithSalesAmt. " sales with a total value of $" .number_format($smithSum, 2). " and an average sale value of $" .number_format($smithAvg, 2). "</p>");
    print("<p>Jones achieved " .$jonesSalesAmt. " sales with a total value of $" .number_format($jonesSum, 2). " and an average sale value of $" .number_format($jonesAvg, 2). "</p>");
    
    ?>

  </body>

</html>
