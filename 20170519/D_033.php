<?php
$line = trim(fgets(STDIN));
$b = explode(" ",$line);
$c = substr($b[0],0,1);
$d = substr($b[1],0,1);
echo ($c.".".$d);
 ?>
