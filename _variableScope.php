<?php
// PHP has three different variable scope definitions

#local
#global
#static

// Global and Local Scope


#🚀 Global
// A variable declared outside a function has  a global scope and can only be accessed outside a function.
// $x=5;
// function myTest(){
//   //error
//   // echo "<p>Variable x inside function is : $x</p>";
// }
// myTest();
// echo "<p>Variable x ouside function is : $x</p>";
// {
//   echo "<p>Variable x inside block is: $x</p>";
// }

#👋Local
// A variable declare within a function has a LOCAL SCOPE and can only be accessed within that function.

// function myTest() {
//   $x = 5; // local scope
//   echo "<p>Variable x inside function is: $x</p>";
// }
// myTest();

// // using x outside the function will generate an error
// echo "<p>Variable x outside function is: $x</p>";

// {
//   echo "<p>Variable x outside function is: $x</p>"; //error

// }


#✔The global Keyword
// The global keyword is used to access a global variable from eithin the function

// $x = 5;
// $y = 10;

// function myTest() {
//   global $x, $y;
//   $y = $x + $y;
// }

// myTest();
// echo $y; // outputs 15
/*
PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.
*/

// $x = 5;
// $y = 10;

// function myTest() {
//   $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
// }

// myTest();
// echo $y; // outputs 15


/*
Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.
*/
function myTest() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest();//0
echo "<br />";
myTest();//1
echo "<br />";
myTest();//2
?>