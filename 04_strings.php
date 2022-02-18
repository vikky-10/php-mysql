<?php

// Create simple string
$name="vikky";
$string1='Hello I am $name. I am 20';
$string2="Hello I am $name. I am 20";
echo $string1.'</br>';
echo $string2.'<br>';


// String concatenation
echo 'hello '.' World'.' and PHP'.'</br>';
// String functions
$string ="    Hello world   ";


echo "1 - ". strlen($string)."<br>";
echo "2- ". trim($string)."<br>";
echo "3- ". ltrim($string)."<br>";
echo "4- ".  rtrim($string)."<br>";
echo "5- ". str_word_count($string)."<br>";
echo "6- ". strrev($string)."<br>";
echo "7- ". strtoupper($string)."<br>";
echo "8- ". strtolower($string)."<br>";

// Multiline text and line breaks

// Multiline text and reserve html tags

// https://www.php.net/manual/en/ref.strings.php