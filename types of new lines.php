<!-- Variables in PHP -->

<?php
$text = "Prashanth.S";
$a = 5;
$b = 6;

/*Printing in a new line using <"br">*/
echo "Welcome ",$text;
echo "<br>";
echo "The addition of $a + $b : ",$a+$a;

/*Printing in a new line using nl2br() and \n*/
echo nl2br("Welcome $text\n The addition of $a + $b : ",$a+$a);

?>
		
