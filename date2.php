<?php
// Sekrang tanggal 13 April 2006 09:43:49
$arrDay = array ("Minggu", "Senin", "Selasa","Rabu","Kamis","Jum'at","Sabtu");
$day = date ("w");    // 0 - 6 off day

echo "Hari ini hari : <br>" . $arrDay[$day]."<br>";

?>