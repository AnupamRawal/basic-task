<?php 

 $arr = [15,30,10,25,10,20,20,-5,2];

function dltDuplicate($arr){
   $newArr= array_count_values($arr);
   foreach ($newArr as $key => $value) {
       if($value==2){
           unset($newArr[$key]);
       }
   }
   return $newArr;
}

$dlt=[];
$dlt=dltDuplicate($arr);
print_r($dlt);
 

?>