<?php
$line = trim(fgets(STDIN));
$b = mb_substr_count($line, "A");
echo $b;
 ?>
