<?php
include 'functions/utility-functions.php';
$fileName = 'names-short-list.txt';

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

echo '<h1>Names - Results</h1>';

echo '<h2>All Names</h2>';
echo "<p>There are " . sizeof($fullNames) . " total names</p>";
echo '<ul style="list-style-type:none">';    
    foreach($fullNames as $fullName) {
        echo "<li>$fullName</li>";
    }
echo "</ul>";

echo '<h2>All Valid Names</h2>';
echo "<p>There are " . sizeof($validFullNames) . " valid names</p>";
echo '<ul style="list-style-type:none">';    
    foreach($validFullNames as $validFullName) {
        echo "<li>$validFullName</li>";
    }
echo "</ul>";

echo '<h2>Unique Names</h2>';
$uniqueValidNames = (array_unique($validFullNames));
echo ("<p>There are " . sizeof($uniqueValidNames) . " Unique names</p>");
echo '<ul style="list-style-type:none">';    
    foreach($uniqueValidNames as $uniqueValidNames) {
        echo "<li>$uniqueValidNames</li>";
    }
echo "</ul>";


// unique last names
echo '<h2>Unique Valid Last Names</h2>';
$validUniqueLastNames = array_unique($validLastNames);
echo "<p>There are " . sizeof($validUniqueLastNames) . " unique valid last names</p>";
echo '<ul style="list-style-type:none">';
  foreach ($validUniqueLastNames as $validUniqueLastName) {
    echo "<li>$validUniqueLastName</li>";
  }
  echo "</ul>";

// unique first names
echo '<h2>Unique Valid First Names</h2>';
$validUniqueFirstNames = array_unique($validFirstNames);
echo "<p>There are " . sizeof($validUniqueFirstNames) . " unique valid first names</p>";
echo '<ul style="list-style-type:none">';
foreach ($validUniqueFirstNames as $validUniqueFirstName) {
    echo "<li>$validUniqueFirstName</li>";
  }
echo "</ul>";

// most common last names
echo '<h2>Most Common Last Names</h2>';
$lastNamesCount = array_count_values($validLastNames);
arsort($lastNamesCount);
echo '<ul style="list-style-type:none">';
$limit = 5;
foreach ($lastNamesCount as $lastName => $count) {
    echo "<li>$lastName: $count occurrences</li>";
    $limit--;
    if ($limit === 0) {
        break;
    }
  }
echo '</ul>';

// most common first names
echo '<h2>Most Common First Names</h2>';
$firstNamesCount = array_count_values($validFirstNames);
arsort($firstNamesCount);
echo '<ul style="list-style-type:none">';
$limit = 5;
foreach ($firstNamesCount as $firstName => $count) {
    echo "<li>$firstName: $count occurrences</li>";
    $limit--;
    if ($limit === 0) {
        break;
    }
  }
echo '</ul>';

?>
