asgmnt13.
</br>

<?php
//define numbers 
$num1 = 1234545;
$num2  = 548646498645614864;
$num3  = 43251;

function countDigit($num){
$myArray = str_split($num);
$arrLength = count($myArray);
echo "Total digits are $arrLength in number $num";
};

//call function to check
countDigit($num2);

?>