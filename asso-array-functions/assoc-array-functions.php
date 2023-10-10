<?php

/* ------------------------------------------------------------------------

In this set of exercises we are exploring additional array functions
found in chapter 16 of your text.

include the stateCapitals array for the following demonstrations
and exercises.

I've added comments. You are expected to fill in the code where noted.

------------------------------------------------------------------------ */
include 'state-capitals.php';

echo "<h1> Associative Array Exercises</h1>";
    
/* ------------------------------------------------------------------------

1.  Use the array_reverse() function to display the state capitals 
    in reverse order.

------------------------------------------------------------------------ */

// First store the result of the function to an array variable

$reversed = array_reverse($stateCapitals);

// use print_r() to display the result

print_r($stateCapitals);
 
echo "<hr>";


/* ------------------------------------------------------------------------
    
2.  Use the array_search() function to find the which state of which
    Lansing is the capital.

    In this instance, I used the variable $key since we are searching for the 
    state which is the key in the array.

------------------------------------------------------------------------ */

$key = array_search("Lansing", $stateCapitals);

  echo "<p>Lansing is the capital of $key.</p>";
 
 echo "<hr>";

/* ------------------------------------------------------------------------
    
3.  Use the array_slice() function extract the first five elements in 
    the $stateCapital array. Then use the same function to extract the last
    5 elements in the array.

    Use the array_merge() function to create a new array that 
    combines the first 5 elements and the last 5 elements of the array

------------------------------------------------------------------------ */

// Use the array_slice() 

$firstFiveStates = array_slice($stateCapitals, 0, 5);
$lastFiveStates = array_slice($stateCapitals, 45, 5);

$mergedStates = array_merge($firstFiveStates, $lastFiveStates);
print_r($mergedStates);

echo "<hr>";

/* ------------------------------------------------------------------------

  4.    Oops. I wrote an array that contains a list of the original 6 
        NHL teams, but the 5th team in the list is incorrect. Use
        the array_splice() function to replace the Tampa Bay Lightning
        with Detroit Red Wings.

        Note, because the way array_splice works, the 4th argument in 
        the array_splice parameter list must be an array, even if
        it is an array with one element.
        
------------------------------------------------------------------------ */

$originalSix = [
  "Montreal Canadiens",
  "Toronto Maple Leafs",
  "Boston Bruins",
  "Chicago Black Hawks",
  "Tampa Bay Lighting",
  "New York Rangers"
];

$missingTeam = [
  "Detroit Red Wings"
];

array_splice($originalSix, 4, 1, $missingTeam);

print_r($originalSix);
