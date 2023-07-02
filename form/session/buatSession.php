<!-- contoh buat session untuk mengitung jumlah kunjungan. -->
<!-- dimana jika direfresh, maka jumlah kunjungannya akan bertambah. -->

<?php
session_start();

if (isset($_SESSION['kunjungan'])){
    $_SESSION['kunjungan'] = $_SESSION['kunjungan'] + 1;
}
else {
    $_SESSION['kunjungan'] = 1;
}

echo "Ini Kunjungan ke = ".$_SESSION['kunjungan'];
?>