<?php

// What is a variable
// variables are case sensitive



// Variable types

/*

String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource

*/

// Declare variables
$name="vikky singh";
$age=21;
echo "my name is $name <br />";
echo "And your name?";
$txt="Coding";
echo "<br /> I love" . $txt . "!";
echo "<br />";

$isTrue=true;
$isFalse=false;
$isNull=null; 
echo $isTrue . "<br />"; //1
echo $isFalse. "<br />"; // empty string
echo $isNull . "<br />"; //empty string





// Print the variables. Explain what is concatenation

// Print types of the variables
echo gettype($name) . "<br />";//string
echo gettype($isFalse) . "<br />";//boolean
echo gettype($isNull) . "<br />";//NULL
echo gettype($age) . "<br />";//integer

// Print the whole variable

var_dump($name);// string(11) "vikky singh" gives full information
echo "<br />";
$arr=array(1,2,3,4,5);
var_dump($arr);

// Change the value of the variable

// Print type of the variable

// Variable checking functions

// Check if variable is defined

// Constants

// Using PHP built-in constants
