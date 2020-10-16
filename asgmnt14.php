asgmnt14.php

</br>

<?php
//define numbers 
$num1 = 19;
$num2  = 176;
$num3  = 33;

function evenOrOdd($num){
	if($num%2==0){
		echo "number $num is even";
	}else{
		echo "number $num is odd";
	}
};
//call function to check
evenOrOdd($num2);

?>