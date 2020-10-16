asgmnt59(6).php

</br>
<?php
for ($i=0; $i<5 ; $i++) {
	for ($j=0; $j<5 ; $j++) {
		if($j==0||$i==4||$i==$j){
			echo "*";
		}else{
			echo "&nbsp";
		}
	};
	echo "</br>";
}


?>
