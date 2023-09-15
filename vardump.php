<?php

echo "Ini adalah contoh penggunaan dari var_dump()";
echo "<br><br>";


/*
Fungsi var_dump() pada PHP digunakan untuk melakukan debugging atau inspeksi variabel atau struktur data. 
Ini sangat berguna untuk memahami struktur dan isi dari variabel, terutama ketika Anda ingin mengetahui bagaimana variabel tersebut terbentuk 
atau jika Anda ingin menemukan kesalahan dalam kode Anda.
*/

$data = [
    "a" => 1,
    "b" => 2,
    "c" => 3
];

var_dump($data);
echo"<br>";


$nama = "John";
$umur = 30;
$hobi = ["berenang", "membaca", "menggambar"];

var_dump($nama);
echo"<br>";

var_dump($umur);
echo"<br>";

var_dump($hobi);
echo"<br>";


/*
Hasil dari kode di atas akan mencetak informasi yang sangat detail tentang setiap variabel, 
termasuk tipe data, panjang string (jika variabel adalah string), dan isi dari array (jika variabel adalah array). 
*/

/*
var_dump() adalah alat yang kuat untuk memecahkan masalah dan memahami bagaimana data Anda terstruktur. Namun, perlu diingat bahwa outputnya mungkin cukup teknis, sehingga lebih sesuai untuk pengembangan daripada untuk ditampilkan kepada pengguna akhir. 
Jika Anda ingin hasil yang lebih mudah dibaca, Anda bisa mempertimbangkan untuk menggunakan echo atau print_r() dalam beberapa kasus.
*/

?>