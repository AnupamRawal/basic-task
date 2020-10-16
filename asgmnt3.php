<?php

//Two numbers a and b
$a=40;
$b=70;

// functio to swap

function swapNumber($a,$b){
$a=($a+$b);
$b=($a-$b);
$a=($a-$b);
echo "after swaping a=$a, b=$b";
}

swapNumber($a,$b);

?>

