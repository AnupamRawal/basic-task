asgmnt47.php


</br>

<?php

   //Delete elements from array;

    $arr = [2,-10544,-3,7,9];
    $position = 2 ;//position as index or key of the elements

    function dltElements($oldArr,$position){
    	unset($oldArr[$position]);
    	return array_values($oldArr); //to reindex the keys
    };

    $newArr = dltElements($arr,$position);
    echo "old array was &nbsp";
    print_r($arr);
    echo "</br> and new array is";
    print_r($newArr);

?>
