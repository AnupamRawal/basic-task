asgmnt54.php

</br>

<?php 

function oddEven($arr){
    $even = [];
    $odd = [];
    $fEven=[];
    $fOdd=[];
    // save even and odd into seperate array
    	for ($i=0; $i <count($arr) ; $i++) 
    	{ 
    		if($arr[$i]%2==0){
    			array_push($even, $arr[$i]);
                $fEven=$even;
    		}else{
    			array_push($odd, $arr[$i]);
                $fOdd=$odd;
            }
        }
        echo "the array was $arr </br>";
        echo "even array formed:";print_r($fEven);echo "</br>";
        echo "odd array formed:";print_r($fOdd);echo "</br>";
    }


    $arr = [2,4,10,3,7,9,12];
    oddEven($arr);


?>
