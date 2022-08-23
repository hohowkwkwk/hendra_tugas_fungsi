<?php
/**
** Hendra Riyanto
** 11
** XII RPL 1
*/
echo "<br>";
function volumebalok ($panjang,$lebar,$tinggi) {
     return ($panjang*$lebar*$tinggi);
}
     echo "1.Diketahui p=15, l=12, t=8, Tentukan volume balok tersebut=".volumebalok (15,12,8);
echo "<br>";
function volumekerucut ($jari2,$tinggi) {
    return (1/3*M_1_PI*$jari2*$jari2*$tinggi);
}
echo " 2.Diketahui r=14, t=15, . Tentukan volume kerucut tersebut=".volumekerucut (14,15);
?>