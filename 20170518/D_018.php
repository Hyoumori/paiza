<?php
$line = trim(fgets(STDIN));
$b = explode(" ",$line);
$c = substr($b[0], $b[1]-1, 1);
echo $c;
 ?>
