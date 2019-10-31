<?php

$someWord = "Champlain";

$wordChars = str_split($someWord);// converts the string into an array

$wordValues = array();// array where the ASCII values will be saved

foreach ($wordChars as $charVal) {
	$charNum = ord($charVal);// get the ASCII value of each array element	
	$wordValues[] = $charNum;// add the ASCII value of each element to the array
}

print_r($wordValues);// display the contents of the array of ASCII values

?>