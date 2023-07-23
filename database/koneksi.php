<!-- cara buat koneksi ke mysql database -->

<?php

$server = "localhost";
$username = "root";
$password = "";
$database_name = "dbbuku";

$koneksi = mysqli_connect($server,$username,$password,$database_name);

if ($koneksi){
    echo "Berhasil konek database";
}
else {
    echo "Gagal Konek database";
}



?>