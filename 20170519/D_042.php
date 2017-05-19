<?php
$line = trim(fgets(STDIN));
$a = explode(" ",$line);
$line1 = trim(fgets(STDIN));
$b = explode(" ",$line1);
$c = $a[0] * $b[1] - $b[0] * $a[1];
echo $c;
?>
