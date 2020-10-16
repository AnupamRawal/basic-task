asgmnt10.php

</br>
<?php 

//numbers in array
$a=10;
$b=20;
$c=30;

//function to check largest number
function findMax($a,$b,$c){
	if($a>$b && $a>$c){
		echo " is $a";
	}else if($b>$a && $b>$c){
		echo "is $b";
	}else{
		echo "is $c";
	}
}
echo "largest number between $a, $b, $c";
findMax($a,$b,$c);

?> 
