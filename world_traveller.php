<?php

//we want to convert money from other currencies so we declare new variables named after these currencies and asign the amount we have to them.
$riel = 2103942;
$kyat = 19092;
$krones= 109;
$lek = 9094;
//exange rate to pounds
$riel_rate=5106.07;
$kyat_rate=1732.83;
$krones_rate = 8.54;
$lek_rate=142.73;

echo "WE have the following travel money:";
echo "\n".$riel." Riel";
echo "\n".$kyat." Kyat";
echo "\n".$krones." Norwegian Krones";
echo "\n".$lek." Lek";

echo "\nAfter converting the foreing currency we get the following amounts in dollars:";
echo "\nRiel = ".$riel / $riel_rate." Pounds";
echo "\nKyat = ".$kyat / $kyat_rate." Pounds";
echo "\nDanish Krone= ".$krones / $krones_rate." Pounds";
echo "\nlek= ".$lek / $lek_rate." Pounds";

echo "\nTotal conversion including 1 Pound comission per transaction:\n";


echo ($riel / $riel_rate)+1+($kyat / $kyat_rate)+1+($krones / $krones_rate)+1+($lek / $lek_rate);



 ?>
