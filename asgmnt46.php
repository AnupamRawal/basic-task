asgmnt46.php


</br>

<?php

   //Push elements in array;

    $arr = [2,-10544,-3,7,9];
    $toPush=[545,9656,10];

    function pushElements($oldArr,$elements){
    	for ($i=0; $i <count($elements); $i++) { 
    	 array_push($oldArr,$elements[$i]); //push all elements in array
    	} 
    	return $oldArr;
    };
    
    $newArr = pushElements($arr,$toPush);
    print_r($newArr);

?>
