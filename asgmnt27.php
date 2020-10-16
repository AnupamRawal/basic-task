asgmnt27.php

</br>
<?php 
//pefect number or not 
function isperfectNumber($n){
	$sum = 0;
	for ($i=1; $i <$n ; $i++) { 
		if($n%$i==0){
			$sum += $i;
		}
	}
	 // return $n == $sum
	// echo "$sum </br>";
	// echo "$n";

	if($sum==$n){
		echo "$n is perfect number";
	}else{
		echo "$n is not a perfect number";
	}
}

isperfectNumber(7);


 ?>