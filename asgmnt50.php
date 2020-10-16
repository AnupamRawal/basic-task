asgmnt50.php

</br>

<?php

   //Count unique elements in arraay

    function countDuplicate($arr){
		$res=0;
		$newArr=array_count_values($arr);
		foreach ($newArr as $key => $value){
			if($value>=2){
				 $res++;
			}
		} 
		return $res;
    }

    $arr = ['hello',10,20,10,20,20,-5,'hello'];
    $fRes = countDuplicate($arr);

    // $fDuplicate = $duplicate;
    // $fRes = $res;

    echo "duplicate elements in array are $fRes ";
    // print_r($fDuplicate);


?>