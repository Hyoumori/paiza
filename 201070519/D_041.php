<?php
$line = trim(fgets(STDIN));
$b = explode(" ",$line);
$a =$b[2] * $b[1];
if($a < $b[0]){
    echo "NG";
}else{
    $b[0] > $a;
    echo "OK";
}
 ?>
