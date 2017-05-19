<?php
$a = 0;
for($i = 0; $i < 7; $i ++){
    $line = trim(fgets(STDIN));
    if($line <= 30){
        $a++;
    }
}
echo $a;
?>
