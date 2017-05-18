<?php
$line = trim(fgets(STDIN));
$line1 = trim(fgets(STDIN));
$line2 = trim(fgets(STDIN));
$line3 = trim(fgets(STDIN));
$line4 = trim(fgets(STDIN));
echo max($line,$line1,$line2,$line3,$line4);
echo "\n";
echo min($line,$line1,$line2,$line3,$line4);
?>


<?php//上記よりも簡単にまとめたもの
$b = array();
for($i = 0; $i < 5; $i ++){
    $line = trim(fgets(STDIN));
    $b[$i] = $line;
}
echo max($b)."\n";
echo min($b);
 ?>
