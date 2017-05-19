<?php
$line = trim(fgets(STDIN));
$line1 = trim(fgets(STDIN));
$line2 = trim(fgets(STDIN));
$line3 = trim(fgets(STDIN));
$line4 = trim(fgets(STDIN));
$line5 = trim(fgets(STDIN));
$line6 = trim(fgets(STDIN));
$c = substr_count("$line,$line1,$line2,$line3,$line4,$line5,$line6","no");
echo $c;
 ?>
