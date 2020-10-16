<?php 

for($i=0;$i<5;$i++){
    for($j=0;$j<5;$j++){
        if(($i==1||$i==2||$i==3)&&($j==1||$j==2||$j==4)){
            echo "&nbsp&nbsp";
        }else{
            echo"*";
        }
    }
    echo "</br>";
}

?>