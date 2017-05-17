<?php
$line = trim(fgets(STDIN));
echo "Hello ";
for($i = 1; $i <= $line; $i ++){
    $line1 = trim(fgets(STDIN));

    if($i == $line){
    break;
    }
    echo $line1.",";
}
echo $line1.".";

  ?>
