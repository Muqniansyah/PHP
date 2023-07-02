<!-- setcookie(nama,nilai,expire,path,domain) = untuk buat cookie-->

<?php
setcookie("user", "muni",time()+3600);

// mencetak cookie
echo $_COOKIE["user"];
// menampilkan semua cookie
print_r($_COOKIE);

// fungsi isset()untuk mengecek apakah cookie sudah diset atau belum.
if (isset($_COOKIE["user"])){
    echo "Selamat Datang ".$_COOKIE["user"]."!<br>";
}
else {
    echo "Selamat Datang Guest! <br>";
}


// cara hapus cookies
// buka chrome -> lainnya (titik tiga) -> more tools -> clear browsing data -> pilih rentang waktu -> centang ketiga opsi -> clear data.

?>