<?php

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