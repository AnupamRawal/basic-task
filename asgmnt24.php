asgmnt24.php

<?php  

//to check number is palindrome



function CheckPalindrome($n){  
	$number = $n;  
	$revNumber = 0;  
	while($number>=1) {  
		$rem = $number % 10;  
		$revNumber = $revNumber * 10 + $rem;
		$number = $number/10;  
	}  
	return $number;  }  

	$input = 123532;  
	$num = CheckPalindrome($input);  
	if($input==$num){  
		echo "$input is a Palindrome number";  
	} else {  
		echo "$input is not a Palindrome";  
	}  
?>  