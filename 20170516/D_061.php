<?php
$line = trim(fgets(STDIN));
if($line < 1){
    echo "1";
}else{
    $line = $line * 3;
    echo "$line";
}
 ?>
