<?php
 $line = trim(fgets(STDIN));
 if(0 <= $line and $line <= 9){
     echo "00".$line;
 }else if(10 <= $line and $line <= 99){
     echo "0".$line;
 }else{
     echo $line;
 }
 ?>
