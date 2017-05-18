<?php
$line = trim(fgets(STDIN));
$b = explode(" ",$line);
$a = floor($b[0] / $b[1]);
$c = $b[0] % $b[1];
echo $a ." ". $c;

 ?>
