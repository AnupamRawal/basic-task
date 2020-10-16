asgmnt29.php

</br>

<?php 
//check prime number or not

function checkPrime($number){
if($number==1)
	return 0;
for ($i=2; $i<=$number ; $i++) { 
	if($number%$i==0){
		return 0;
	} return 1;
	
}	
}


$num = 7;
$checkNumber=checkPrime($num);
if($checkNumber==1){
	echo "this is a prime number";
}else{
	echo "this is not a prime number";
}




 ?>