<?php
include 'alumnes.php';

$arrlength = count($alu);

for($x = 0; $x < $arrlength; $x++) {
  echo $alu[$x];
  echo "<br>";
}
echo "<br>";
echo $arrlength." alumnes";
echo "<br>";
echo $_SERVER['PHP_SELF'];
?>
