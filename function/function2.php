<?php

// membuat fungsi dengan lebih dari 1 argumen
function jumlahkan($x, $y){
    $z = $x + $y;
    return $z;
}

echo "Penjumlahan dengan fungsi PHP";
echo "<br>";
echo "10 + 11 = ".jumlahkan(10,11)."<br>";
echo "7 + 15 = ".jumlahkan(7,15)."<br>";
echo "2 + 8 = ".jumlahkan(2,8)."<br>";


// membuat fungsi tanpa argumen
function greeting(){
    echo "Hai aku Muni";
}
    // cara pemanggilan function
greeting();

?>