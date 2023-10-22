<?php 

function removePunctuation($string="") {
  $p = "/[[:punct:]]/u";

  $cleanString = preg_replace($p, '', $string);

  return $cleanString;
}

function isPalindrome($string="") {

  $string = strtolower(str_replace(' ', '', $string));

  $length = strlen($string);

  for ($i = 0; $i < $length / 2; $i++) {
      if (substr($string, $i, 1) !== substr($string, $length - $i - 1, 1)) {
          return " is not";
      }
  }

  return " is";
}
