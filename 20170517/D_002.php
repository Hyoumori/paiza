<?php
$line = trim(fgets(STDIN));
$b = explode(" ",$line);
if($b[0] <$b[1]){
    echo $b[1];
}else if($b[0] >$b[1]){
    echo $b[0];
}else if($b[0] ==$b[1]){
    echo "eq";
}
 ?>
