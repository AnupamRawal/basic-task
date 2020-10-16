asgmnt20.php

<?php 

$total = 0;
$number = 0;
$finalValue=10;
 
while ($number <= $finalValue)
{
    if ($number % 2 == 1)
    {
        $total += $number;
    }
    $number++;
}
 
echo $total;
?>