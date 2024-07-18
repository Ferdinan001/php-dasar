<?php
$macam2 = array (121, "Joko", 44.99, "belajar PHP"); $macam2[] = "duniailkom";
unset($macam2[0]);
unset($macam2[2]);
unset($macam2[3]);
echo "<prev>";
var_dump($macam2);
echo "</prev>";
?>