asgmnt56.php

</br>

<?php 

$num1=15;
$num2=20;
$num3=3;

function findMax($a,$b,$c){
	if($a>$b && $a>$c){
		echo "$a is max between all";
	}elseif ($b>$c && $b>$a){
		echo "$b is max between all";
	}else{
		echo "$c is max between all";
	}
}

findMax($num1,$num2,$num3);
 ?>
