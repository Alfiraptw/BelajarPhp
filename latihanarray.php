<?php
$mobil=array("Volvo","BMW","Toyota");

sort($mobil);

$length=count($mobil);

for($x=0; $x < $length; $x++){
    echo $mobil[$x];
    echo "<br/>";
}
?>