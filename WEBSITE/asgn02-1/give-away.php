<!DOCTYPE html>
<!--
  Author:   Joseph Thomas
  Date:     
  File:	    give-away.php
  Purpose:  Ch 13 Exercise
-->

<html>

  <head>
    <title>GIVE AWAY</title>
    <link rel="stylesheet" href="sample.css">
  </head>

  <body>
    <?php
    function freeTrip() {
      $city = ["Aruba", "Cairo", "London", "Rome", "Tokyo"];
      $prize = rand(0, 4);
      return $city[$prize];
    }

    print("<h1>CONGRATULATIONS!</h1>");
    print("<h1>You have won a free trip to " . freeTrip() . "!!!</h1>");
    ?>
  </body>

</html>
