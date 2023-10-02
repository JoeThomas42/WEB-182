<!DOCTYPE html>
<!--	Author: 
    Date:	
    File:	software-order.php
    Purpose: OOP Exercise
-->

<html>

  <head>
    <title>OOP Exercise</title>
    <link rel="stylesheet" href="sample.css">
  </head>

  <body>
    <h1>Software Order</h1>

    <?php

    include("inc-order-object.php");

    $itemCost = $_POST["itemCost"];
    $numItems = $_POST["numItems"];

    $order1 = new Order();

    $order1->setItemCost($itemCost);
    $order1->setNumItems($numItems);

    ?>

    <table border="1">
      <tr>
        <td>Sub-Total:</td>
        <td>$<?= $order1->getSubTotal() ?></td>
      </tr>
      <tr>
        <td>Tax:</td>
        <td>$<?= $order1->getSalesTax() ?></td>
      </tr>
      <tr>
        <td>Shipping and Handling:</td>
        <td>$<?= $order1->getShippingHandling() ?></td>
      </tr>
      <tr>
        <td>TOTAL:</td>
        <td>$<?= $order1->getTotal() ?></td>
      </tr>
    </table>

  </body>

</html>
