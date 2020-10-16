asgmnt30.php

</br>

<?php 
//check prime number or not


function stringPalindrom($inputString){
	$revString  = strrev($inputString);

	if($inputString == $revString){
		echo "this string $inputString is a palindrom string </br>";
	}else{
		echo "this is not a palindrom string </br>";
	}

}

stringPalindrom('nayan');
stringPalindrom('aman');

?>

