<?php

								/*Declaring the variables*/
$name = "Prashanth";
$age = 20;
$isMale = true;
$salary = null;
$height = 1.85;    

								/* Print the values of the variable */
echo "Value of the variable";
echo $name.'<br>';
echo $age;
echo "<br> $isMale";
echo "<br> $salary";
echo "<br> $height";

 								/* Print the type of variable */
echo "<br>Type of the variable<br>";
echo gettype($name).'<br>';
echo gettype($age).'<br>';
echo gettype($isMale).'<br>';
echo gettype($salary).'<br>';
echo gettype($height).'<br>';  

 							/* Print the whole variable */
var_dump($name,$age,$isMale,$salary,$height);

 							/* Change the value of the variable */	
echo "<br>Before : ",gettype($name).'<br>';
$name = false;   /*before name was having Prashanth, but now changed to false*/
echo "After : ",gettype($name).'<br>';

 							/*   Variable checking function  */
is_string($name);  // false
is_int($age);   // true
is_bool($isMale);  // true
is_double($height); // true

 						/*Check if the variable is defined or not*/
isset($name);       // true
isset($address);    // false

								/*Constants*/
define('PI',3.14);
echo PI.'<br>';

						/*Using PHP buit-in functions*/
echo SORT_ASC.'<br>';
echo PHP_INT_MAX.'<br>';
echo PHP_INT_MIN.'<br>';

##############################################################################
						/*Global variable*/
$x = 24;
function test1() {
	echo "Global variable x=$x cannot be accessed within a function";

	global $x;   /*To access a global variable within a function*/
	echo nl2br("\nGlobal variable x=$x with global keyword");
}

test1();
echo nl2br("\nThe global variable x=$x can be accessed only outside the function");
##############################################################################
				
					     /*Local variable*/
function test2() {
	$y=10;
	echo nl2br("\nThe local variable y=$y can be be accessed only within the function");
}

test2();
echo nl2br("\nThe local variable y=$y cannot be accessed outside the function");
##############################################################################

?>