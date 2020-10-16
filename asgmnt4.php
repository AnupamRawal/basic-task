asgmnt4.php
</br>
<?php

//radius and pi value
$radius=4;
$pi=Pi();

function areaofCircle($pi,$radius){
 $area=$pi*Pow($radius,2);

 //area
 echo "raidus:$radius </br> area of circle: $area ";	
}

areaofCircle($pi,$radius)

?>