<!DOCTYPE html>
<!--	Author: Mike O'Kane
    Date:	August, 2017
    File:	modify1.php
    Purpose: Chapter 15 Exercise
    
    Modify1.html asks the user for an employee ID. Modify1.php receives the ID,
    creates an Employee instance, looks up the employee data using the ID, 
    and displays the weekly pay for the employee.
    
    Modify this application so that Modify1.html asks for three ID's, and Modify1.php
    receives the three ID's and uses three Employee instances to obtain and display the 
    pay for all three.
      
    Here are three valid ID's to test this: 003345, 012345, 123456
-->

<html>

  <head>
    <title>Modify 1</title>
    <link rel="stylesheet" href="sample.css">
  </head>

  <body>

    <?php

    include("inc-employee-object.php");

    // I played with and refactored this one for fun before realizing the next exercise has us modify the inc-employee-object.php to validate the ID

    $ids = [$_POST["id1"], $_POST["id2"], $_POST["id3"]];
    $employees = [];
    $count = 0;

    foreach ($ids as $id) {
        $employee = new Employee();
        $employee->findEmployee($id);
        $employees[] = $employee;
    }

    foreach ($employees as $employee) {
        if ($employee->getID() == NULL) {
            print("<p>Employee #".$ids[$count]." not found.</p>");
          } else {
            print("<p>Weekly Pay for ".$employee->getFirstName()."  ".$employee->getLastName().": $".$employee->getWeeklyPay()."</p>");
          }
        
        $count++;
    }
    
    ?>

  </body>

</html>
