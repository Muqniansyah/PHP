<?php

    // fungsi untuk menghitung luas lingkaran
// membuat fungsi dengan argumen
function luas_lingkaran($jari_jari) {
        //pi() adalah fungsi built-in yang sudah secara default ada diPHP dan bisa dipanggil. gunanya untuk  mengembalikkan nilai phi(3.14).
    $luas = pi()*$jari_jari*$jari_jari;
    // gunanya return untuk mengembalikkan sebuah nilai pada function.
    return $luas;
}


$r = 10;
echo "Jari jari adalah = ".$r."<br>";
// pemanggilan fungsi
echo "Luas adalah ". luas_lingkaran($r);

?>