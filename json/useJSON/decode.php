<?php

// json_decode() untuk membaca file json, lalu mengubahnya jadi array associative.
// file_get_contents() untuk mengakses json.


// ambil data json dari file
$konten = file_get_contents('../coba.json');
// ubah string json jadi array associative
$results = json_decode($konten, true);

var_dump($results);

echo"<br>";
echo $results["nama"];

echo"<br>";
echo $results["pembingbing"]["pembingbing1"];


?>