asgmnt31.php

</br>

<?php 
 
    //fibonacci series using for loop
 
    $n1 = 0;
    $n2 = 1;
 
    echo "fibonacci series"."<br>";
    echo $n1." ";
    echo $n2." ";  
 
    for($i = 0; $i<10; $i++){
 
        $n3 = $n1 + $n2; 
        echo $n3." ";          
 
        $n1 = $n2;                 
        $n2 = $n3;                
    }


?>
