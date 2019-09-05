<?php
$Nama = array[
	          ['Nama' : 'Ujang', 'Kelas  : RPL , alamat : Bandung'],
	          ['Nama' : Mahmud, Kelas : TSM , alamat : Jakarta'],
	          ['Nama' : Ucok, Kelas   :  TKR , alamat : Papua'],

echo "<pre>"; 
print_r ($arrNama); 
echo "</pre>"; 

$mode = current($arrNama);
echo $mode."<br>"; // $mode = 'foot'; 
$mode = next($arrNama); 
echo $mode."<br>"; // $mode = 'bike'; 
$mode = current($arrNama);
echo $mode."<br>"; // $mode = 'bike'; 
$mode = prev($arrNama);  
echo $mode."<br>"; // $mode = 'foot'; 
$mode = end($arrNama);  
echo $mode."<br>"; // $mode = 'plane'; 
$mode = current($arrNama);  
echo $mode."<br>"; // $mode = 'plane'; 

?>  