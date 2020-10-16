asgmnt22.php

<?php


// factorial of number
$num=5;
$factorial=1;

function factorial($num){
	$fact = $GLOBALS['factorial']; //global declaration of variable
	for($i=$num; $i>=1; $i--)
	{
	$fact=$fact*$i;
}

echo "fact of $num is $fact";
}



factorial($num);



 ?>