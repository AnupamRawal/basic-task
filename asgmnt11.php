asgmnt11.php

</br>

<?php
$number = 67836954123; 



function splitNumber($number){
$myArray = str_split($number);

echo "the numer was $number </br> after spliting:</br>";
foreach ($myArray as $key => $value) {
	echo "the $key place is $value</br>";}	
};

splitNumber(1235451);

// print_r($myArray);
// $arrLength = count($myArray);
// ($i=0;$i<=$arrLength;$i++){
// 	echo "numbers are $number <br/>"
// 	print_r($myArray[i])



?>




