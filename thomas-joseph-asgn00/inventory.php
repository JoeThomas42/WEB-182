<!DOCTYPE html>
<!--
  Author: Joseph Thomas
  Date:
  File:	  inventory.php
  Purpose:
-->

<html>

  <head>
    <title>Paint Inventory</title>
    <link rel="stylesheet" href="sample.css">
  </head>

  <body>
    <?php

    $searchColor = $_POST['searchColor'];

    $paintInventory[0] = 65; //White
    $paintInventory[1] = 35; //Cream
    $paintInventory[2] = 15; //Beige
    $paintInventory[3] = 6; //Yellow
    $paintInventory[4] = 15; //Green
    $paintInventory[5] = 2; //Red
    $paintInventory[6] = 0; //Violet
    $paintInventory[7] = 4; //Blue
    $paintInventory[8] = 2; //Teal
    $paintInventory[9] = 14; //Black
    
    print("<h1>Inventory of ".$searchColor." paint</h1>");

    // Your code here..
    print("<p>There are ");

    switch ($searchColor) {
      case "white":
        print($paintInventory[0]);
        break;
      case "cream":
        print($paintInventory[1]);
        break;
      case "beige":
        print($paintInventory[2]);
        break;
      case "yellow":
        print($paintInventory[3]);
        break;
      case "green":
        print($paintInventory[4]);
        break;
      case "red":
        print($paintInventory[5]);
        break;
      case "violet":
        print($paintInventory[6]);
        break;
      case "blue":
        print($paintInventory[7]);
        break;
      case "teal":
        print($paintInventory[8]);
        break;
      case "black":
        print($paintInventory[9]);
        break;
    }

    print(" cans of ".$searchColor." paint available.</p>");
    
    ?>

  </body>

</html>
