<?php

// loop for
for ($i=1; $i<=5; $i++){
    echo "Ini adalah Loop ke - ".$i."<br>";
}

echo "<br>";

// foreach
// loop for each ini hanya untuk array dan digunakan untuk me-loop melalui tiap nilai di array.
$warna = array("Merah","Hijau","Kuning","Biru");

foreach ($warna as $nilai) {
    echo "$nilai <br>";
}

echo "<br>";

// contoh break dan continue
    // break untuk menghentikan/keluar dari loop, bahkan bisa juga keluar dari iterasi.
for ($a=0; $a<=10; $a++){
        // jika a=5
    if ($a==5) {
        // proses perulangan dihentikan
        break;
    }
    echo "Nilai ke ".$a."<br>";
}
    
    echo "<br>";

    // continue untuk buat loop bisa terus berjalan, sambil loncat pada kondisi yang diinginkan. bahkan yang membuat anda bisa meneruskan iterasi.
for ($b=0; $b<10; $b++){
        // jika b=7
    if ($b==7) {
        continue;
    }
    echo "Nilai ke ".$b."<br>";
}
    
    echo "<br>";

?>