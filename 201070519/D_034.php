<?php
$line = trim(fgets(STDIN));
$b = 21 % $line;
if($b !== 0){
    echo $b;
}else{
    echo $line;
}
 ?>
