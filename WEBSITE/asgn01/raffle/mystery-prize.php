<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type="text/css" href="css/styles.css">
    <title>Mystery Prize</title>
  </head>

  <body>

    <?php

    if (isset($_SESSION['fullName'])) {
      print("<h1>Congratulations,<br> ". $_SESSION['fullName']. "!</h1>");
      print("<p>You have won a lovely Salamander!</p>");
      print("<img src='images/red-salamander.jpg' height='217' width='348' alt='Mystery Prize'>");
      print("<p>Check more raffle results <a href='index.html'>here</a>.</p>");
    }
    
    else {
      print("<p>Check your raffle results <a href='index.html'>here</a>.</p>");
    }

    session_destroy();
    
    ?>

  </body>

  </html>
  