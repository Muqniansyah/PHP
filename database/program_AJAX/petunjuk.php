<?php
// mengisi array dengan nama
$a[]= "muni";
$a[]= "arif";
$a[]= "didu";

// mengambil parameter q dari URL
$q = $_REQUEST["q"]; 
$petunjuk = " ";

// mengambil semua petunjuk
if ($q !== " "){
    $q = strtolower($q);
    $len = strlen($q);
    foreach($a as $nama){
        if(stristr($q, substr($nama, 0, $len))){
            if ($petunjuk === ""){
                $petunjuk = $nama;
            }
            else {
                $petunjuk = ", $nama";
            }
        }
    }
}

// mengeluarkan kalimat ketika tidak ada huruf yang benar
echo $petunjuk === "" ? "Maaf tidak ada saran" : $petunjuk;
?>