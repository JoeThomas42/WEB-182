<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Palindrome Detector</title>
  </head>

  <?php
  require_once("palindrome-functions.php");
  $phrase = $_POST["phrase"];
  $cleanString = removePunctuation($phrase);
  $answer = isPalindrome($cleanString);
  ?>

  <body>
    <header>
      <h1>Results</h1>
    </header>
  
    <main>
      <p><i><b><?=$phrase?></b></i> <?=$answer?> a palindrome.</p>
      <a href="../index.html">&#8592; Check another phrase</a>
    </main>
  </body>

</html>
