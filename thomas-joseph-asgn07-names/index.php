<?php
include 'functions/utility-functions.php';
$fileName = 'names.txt';

$lineNumber = 0;

// Load up the array
$FH = fopen("$fileName", "r");
$nextName = fgets($FH);

while(!feof($FH)) {
    if($lineNumber % 2 == 0) {
        $fullNames[] = trim(substr($nextName, 0, strpos($nextName, " --")));
    }

$lineNumber++;
$nextName = fgets($FH);
}

// $findMe = ',';
// echo $fullNames[0] . '<br>';
// echo strpos($fullNames[0], $findMe) . '<br>';
// echo substr($fullNames[0], 0, strpos($fullNames[0], $findMe));
// exit();

// Get all first names
foreach($fullNames as $fullName) {
    $startHere = strpos($fullName, ",") + 1;
    $firstNames[] = trim(substr($fullName, $startHere));
}

// Get all last names
 foreach ($fullNames as $fullName) {
     $stopHere = strpos($fullName, ",");
     $lastNames[] = substr($fullName, 0, $stopHere);
 }

// Get valid names
for($i = 0; $i < sizeof($fullNames); $i++) {
    // jam the first and last name toghether without a comma, then test for alpha-only characters
    if(ctype_alpha($lastNames[$i].$firstNames[$i])) {
        $validFirstNames[$i] = $firstNames[$i];
        $validLastNames[$i] = $lastNames[$i];
        $validFullNames[$i] = $validLastNames[$i] . ", " . $validFirstNames[$i];
    }
}

// ~~~~~~~~~~~~ Display results ~~~~~~~~~~~~ //
echo '<h1 id=\'top\'>Names - Results</h1>';

echo "<h3>Skip to:</h3>";
echo "<a href='#valid'>Valid Names</a><br>";
echo "<a href='#unique-full'>Unique Full Names</a><br>";
echo "<a href='#unique-last'>Unique Last Names</a><br>";
echo "<a href='#unique-first'>Unique First Names</a><br>";
echo "<a href='#most-last'>Most Common Last Names</a><br>";
echo "<a href='#most-first'>Most Common First Names</a><br>";


echo '<h2>All Names</h2>';
echo "<p>There are " . sizeof($fullNames) . " total names</p>";
echo '<ul style="list-style-type:none">';    
    foreach($fullNames as $fullName) {
        echo "<li>$fullName</li>";
    }
echo "</ul>";

echo '<h2 id=\'valid\'>All Valid Names</h2>';
echo "<a href='#top'>Back to top...</a>";
echo "<p>There are " . sizeof($validFullNames) . " valid names</p>";
echo '<ul style="list-style-type:none">';    
    foreach($validFullNames as $validFullName) {
        echo "<li>$validFullName</li>";
    }
echo "</ul>";

// unique full names
echo '<h2 id=\'unique-full\'>Unique Valid Full Names</h2>';
echo "<a href='#top'>Back to top...</a>";
$uniqueValidNames = (array_unique($validFullNames));
echo ("<p>There are " . sizeof($uniqueValidNames) . " Unique names</p>");
echo '<ul style="list-style-type:none">';    
    foreach($uniqueValidNames as $uniqueValidNames) {
        echo "<li>$uniqueValidNames</li>";
    }
echo "</ul>";


// unique last names
echo '<h2 id=\'unique-last\'>Unique Valid Last Names</h2>';
echo "<a href='#top'>Back to top...</a>";
$validUniqueLastNames = array_unique($validLastNames);
echo "<p>There are " . sizeof($validUniqueLastNames) . " unique valid last names</p>";
echo '<ul style="list-style-type:none">';
  foreach ($validUniqueLastNames as $validUniqueLastName) {
    echo "<li>$validUniqueLastName</li>";
  }
  echo "</ul>";

// unique first names
echo '<h2 id=\'unique-first\'>Unique Valid First Names</h2>';
echo "<a href='#top'>Back to top...</a>";
$validUniqueFirstNames = array_unique($validFirstNames);
echo "<p>There are " . sizeof($validUniqueFirstNames) . " unique valid first names</p>";
echo '<ul style="list-style-type:none">';
foreach ($validUniqueFirstNames as $validUniqueFirstName) {
    echo "<li>$validUniqueFirstName</li>";
  }
echo "</ul>";

// most common last names
echo '<h2 id=\'most-last\'>Most Common Last Names</h2>';
echo "<a href='#top'>Back to top...</a>";
$lastNamesCount = array_count_values($validLastNames);
arsort($lastNamesCount);
echo '<ul style="list-style-type:none">';
$limit = 10;
foreach ($lastNamesCount as $lastName => $count) {
    echo "<li>$lastName: $count occurrences</li>";
    $limit--;
    if ($limit === 0) {
        break;
    }
  }
echo '</ul>';

// most common first names
echo '<h2 id=\'most-first\'>Most Common First Names</h2>';
echo "<a href='#top'>Back to top...</a>";
$firstNamesCount = array_count_values($validFirstNames);
arsort($firstNamesCount);
echo '<ul style="list-style-type:none">';
$limit = 10;
foreach ($firstNamesCount as $firstName => $count) {
    echo "<li>$firstName: $count occurrences</li>";
    $limit--;
    if ($limit === 0) {
        break;
    }
  }
echo '</ul>';

?>
