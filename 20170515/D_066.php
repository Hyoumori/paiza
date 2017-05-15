<?php
$komachi = trim(fgets(STDIN));
$a = explode(" " , $komachi);
$b = $a[1]-$a[0];
if($b < 0){
    echo "No";
}else {
    echo $b;
}
 ?>
