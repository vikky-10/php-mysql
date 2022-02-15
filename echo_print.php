<?php
/*
echo and print are more or less the same.
they are both use to output
data to the screen

👋 small difference is echo has no return value
while print has a return value of 1
so it can be used in expressions
echo can take multiple parameters 
while print can take one argument 
echo is marginally faster than print

*/


/*

The echo statement can be used with or without parentheses: echo or echo()

The print statement can be used with or without parentheses print or print()

*/

 echo "This","string","was","made","with multiple parameters";
 $x=4;
 $y=5;
 echo $x+$y;


 #print
 print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

print "<h2>" . $txt1 . "</h2>";
print "Study PHP at " . $txt2 . "<br>";
print $x + $y;
?>