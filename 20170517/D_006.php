<?php
$line = trim(fgets(STDIN));
$b = explode(" ",$line);
if($b[1] == "km"){
    echo $b[0]. "000000";
}else if($b[1] == "m"){
    echo $b[0]. "000";
}else if($b[1] == "cm"){
    echo $b[0]. "0";
}
 ?>
