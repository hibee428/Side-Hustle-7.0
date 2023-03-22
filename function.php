<?php  // strict requirement

function sum(int $x, int $y, int $z) {
  $a = $x * $y * $z;
  return $a;
}

echo "5 * 10 * 20 = " . sum(5, 10, 5) . "<br>";

include 'newfile.php';

?>
