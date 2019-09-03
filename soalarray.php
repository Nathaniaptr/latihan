<?php 

$array = array('saya <br>',10);
$aso   = [
    [
    	'Judul'   => '<h1>Belajar PHP & MySQL untuk Pemula',
    	'Penulis' => '<h3>Admin SMK',
    ],
    [
        'Judul'   => '<h1>Tutorial PHP dari Nol hingga akhir',
        'Penulis' => '<h3>Admin SMK',
    ],
    [
        'Judul'   => '<h1>Membuat aplikasi web denggan PHP',
        'Penulis' => '<h3>Admin SMK',
    ]

];
foreach ($aso as $value) {
    echo $value["Judul"] . "<br>";
    echo $value["Penulis"] . "<br>";
    echo '<hr>';

}
 ?>