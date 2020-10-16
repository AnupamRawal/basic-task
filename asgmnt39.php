asgmnt39.php

</br>

<?php 
 
    // print negative element of array

    $arr = [1516,-515,-80, 23, 1996];
    echo "this is $arr";
    print_r($arr);

    foreach ($arr as $key => $value) {
    	if($value<0){
    		echo "negative elemnet is $value </br>";
    	}
    }



?>


