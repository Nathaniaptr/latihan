<?php
$jambu = 15000;
$dus   = 6;
$isi   = 5;
$harga = 2000;

echo "$jambu * $isi * $dus :" . ($jambu * $isi * $dus);
echo "<br> $dus * $harga : ".( $dus * $harga) ;
echo "<br> Jumlah penjualan jambu adalah : ". ($jambu * $isi * $dus);

echo "<br> Jumlah penjualan dus adalah : ". ($dus * $harga);
echo "<br> Jumlah seluruhnya adalah : ". ($jambu * $isi * $dus + $dus * $harga);

 ?>