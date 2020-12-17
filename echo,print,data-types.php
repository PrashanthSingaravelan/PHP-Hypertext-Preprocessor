<?php
#################################################################################################
										/*echo and print*/
		echo "<h2>This looks pretty with h2 tag";

		echo "I am going with the br method<br>"; 			/*After this echo the cursor will move to the next line*/
		echo "The cursor basically in the second line";
		echo "This ", "string ", "was ", "made ", "with multiple parameters.";

	$str1 = "Prashanth";
	$str2 = "Singaravelan";
	echo "<br>My name is $str1 and my fathers name is $str2";

	/*1st print statement will be in new line, subsequent print will be in the same line */
	print "<h3>With print statement";
#################################################################################################
						             /*PHP Data-types*/
	/*Integer data-type */
	$x = 5985;
	echo "<br>var_dump() will return the data-type and the value of the variable : ";
	var_dump($x);

	/*Float data-type*/
	$x = 59.85;
	echo "<br>var_dump() will return the data-type and the value of the variable : ";
	var_dump($x);

	/*NUll values*/
	$t=null;
	var_dump($t);

	/* Boolean values */
	$a = True;
	$b = False;

	/*PHP array*/
	$cars = array("Rolce Royce","Volvo","BMW");
	echo "<br>The array elements are <br>";
	for($i=0;$i<strlen(cars);$i++) {
		echo "$cars[$i]<br>";
	}
#################################################################################################
?>