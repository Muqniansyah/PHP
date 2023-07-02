<?php
// untuk mengakses cookie
if (isset($_COOKIE['kunjunganTerakhir'])){
    $visit = $_COOKIE['kunjunganTerakhir'];
}
else {
    echo "Anda tidak memiliki cookies!";
}

echo "Kunjungan Terakhir Anda - ".$visit;

?>