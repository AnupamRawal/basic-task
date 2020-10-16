asgmnt21.php

<?php 

//sum of even number between 1o to 20 

$initialValue=10;
$finalValue=20;

function sumofEven($initial, $final){ 
	$sum=0;
for($i =$initial; $i < $final; $i++)
{
     if($i % 2 == 0)
     {
         $sum += $i;
      }
}
 echo "The Sum of  even number upto  ".$i." is: ".$sum;
}

sumofEven($initialValue,$finalValue)

 ?>