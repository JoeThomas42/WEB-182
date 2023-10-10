<html>

  <head>
    <meta charset="utf-8">
    <title>Input Review Results</title>
  </head>

  <body>

    <h1>Results</h1>

    <?php
    $username = $_POST['username'];
    $os = $_POST['os'];
    $musics = implode(", ", $_POST['musics']);

    print("<p>Your name is " . $username . "</p>");
    print("<p>Your favorite operating system is " . $os . "</p>");
    print("<p>You like the following types of music:</p>");
    print_r($musics);
    ?>

  </body>

</html>
