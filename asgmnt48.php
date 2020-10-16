asgmnt48.php


</br>

<?php

   //Count frequency of elements

    $arr = ['hello',10,20,10,20,20,-5,'hello'];

    function countFrequency($arr){
    	return array_count_values($arr);
    };

    $newArr = countFrequency($arr);
    echo "frequency of array </br>";
    print_r($newArr);


?>
