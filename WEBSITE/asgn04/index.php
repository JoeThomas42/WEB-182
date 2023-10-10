<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="sample.css" rel="stylesheet">
    <title>Assignment 04</title>
  </head>

  <body>
    <h1>Assignment 04</h1>

    <?php
    $dir = '../asgn04';
    $files = scandir($dir);
    ?>

    <table>
      <thead>
        <tr>
          <th>File Name</th>
          <th>File Size</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($files as $file) {
          if ($file != "." && $file != "..") {
            $filePath = "$dir/$file";
            $fileSize = filesize($filePath);
            echo "<tr>
            <td><a href='$filePath'>$file</a></td>
            <td>$fileSize bytes</td>
            </tr>";
          }
        }
        ?>
      </tbody>
    </table>

  </body>

</html>
