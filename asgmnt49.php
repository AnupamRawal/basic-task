asgmnt49.php

</br>

<?php
   //Count unique elements in arraay

    function countunic($arr){
    	$res=count($arr);
    	for ($i=1; $i <count($arr) ; $i++) { 
    		for ($j=0; $j < $i; $j++) { 
    			if($arr[$i]==$arr[$j]){
    				break;
    			}
    		}
    		$res--;
    	}

    	return $res;
    }

    $arr = ['hello',10,20,10,20,20,-5,'hello'];
    $fRes = countunic($arr);
    echo "unique elements in array are $fRes ";
?>