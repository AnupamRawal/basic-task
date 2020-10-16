asgmnt23.php


<?php 
//to reverse the number

$num = 123456;
$revNumber=0;
echo "number is $num </br>";

function reverseNumber($num){
	$revNumber=$GLOBALS['revNumber'];
	while ($num != 0) 
		{
			$revNumber = $revNumber*10+$num%10;
			$num= (int)($num/10);	
		}
		echo "reverse number is $revNumber";
	}
	reverseNumber($num);


 ?>