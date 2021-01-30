<?php

$temp = date("H");
echo "Date in 24hrs format : $temp<br>";
## https://www.w3schools.com/php/func_date_date.asp --> refer this for further

$a = $_GET['number1'];  ## 1st Input from the user
if( $a%2 == 0) {  
    echo "$a is an even number";
}
else {
    echo "$a is an odd number";
}

echo "<br>";

$b = $_GET['number2']; ## 2nd Input from the user
if( $b>20 ) {
    echo "$b is greater than 20";
}
elseif( $b<20 ){
    echo "$b is less than 20";
}
else { 
    echo "Have a good day";
}

echo "<br>";

####################### Switch statement ############################
$favicolor = $_GET['color'];

switch ($favicolor) { 
    case "red":
        echo "Your favorite color is red";
        break;
    case "blue":
        echo "Your favorite color is blue";
        break;
    case "green":
        echo "Your favorite color is green";
        break;
    default:
        echo "$favicolor color is not mentioned correctly";
}

?>


