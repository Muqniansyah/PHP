<?php
// membuat cookies

// memperlihatkan kapan waktu kunjungan terakhir
$kunjunganTerakhir = 60 * 60 * 24 * 60 + time();

setcookie('kunjunganTerakhir', date("G:i - m/d/y"), $kunjunganTerakhir);
echo " Cookie sudah terbuat ";
?>