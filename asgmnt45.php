asgmnt45.php


</br>

<?php

   //copy elements from an array;

    $arr = [2,-4,-10,-3,7,9,-12];
    $newArr=[];

    for ($i=0; $i <count($arr); $i++) { 
    	array_push($newArr, $arr[$i]); //push all elements in array
    };

    echo "new array &nbsp";
    print_r($newArr);

?>
