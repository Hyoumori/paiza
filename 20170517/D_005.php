<?php
$line = trim(fgets(STDIN));
$b = explode(" ",$line);
$m = $b[0];
$n = $b[1];
for($i = 0; $i <= 8; $i ++){
    echo $m +($i * $n)." ";
}
echo $m + ($i * $n);
 ?>
