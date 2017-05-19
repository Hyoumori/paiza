<?php
$line = trim(fgets(STDIN));
$line1 = trim(fgets(STDIN));
$a = floor($line1 / $line);
$b = $line1 % $line;
if($b == 0){
    echo $a;
}else{
    $a = $a + 1;
    echo $a;
}
?>
