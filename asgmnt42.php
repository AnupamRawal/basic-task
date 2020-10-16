asgmnt42.php

</br>

<?php 

    $arr = [2,4,10,3,7,9,12];
    $max1=0;
    $max2=0;

    for ($i=0; $i <count($arr); $i++) { 
    	if($arr[$i]>$max1){
    		$max2=$max1;
    		$max1=$arr[$i];

    	}
    	
    	if($arr[$i]>$max2 && $arr[$i]<$max1){
    		$max2=$arr[$i];
    	}
    }

    echo "maximum value in array is $max1 </br>";
    echo "second largest value in array is $max2";
?>
