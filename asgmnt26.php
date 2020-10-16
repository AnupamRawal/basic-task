asgmnt26.php
</br>
<?php 

// find the power of a number

$power = 3;
$number = 2;

function powerOf($power,$number){
	$result=1;
	for ($i=$power; $i>0 ; $i--) {
      $result *=$number;
  }
      return $result;
}

$result = powerOf($power, $number);
echo "power of $number is $power which results $result";

 ?>