asgmnt8.php

</br>
<?php 

//numbers
$numbers = array(10,20,-50,200);

//funtion to find largest
function findLargest($numbers){
	$largestNumber = max($numbers);
	print_r($numbers);
	echo "</br>";
	echo "largest Number in the array is $largestNumber";
};

findLargest($numbers);

  ?> 