
<?php
$line = trim(fgets(STDIN));
$a = ["A","B","C","D","E","F","G","H","I","J"];
$b = explode(" ",$line);
//$b = ["6","3","1"]
for($i = 0; $i < $b[0]; $i ++){
    print $a[$i];//[0][1]
}
  print "\n";
for($j = $b[0]; $j < $b[0]+$b[1]; $j ++){
    print $a[$j];//[2][3][4]
}
    print "\n";
for($k = $b[1]+$b[0]; $k < 10; $k ++){
    print $a[$k];//[5][6][7][8][9]
}
    print "\n";
 ?>
