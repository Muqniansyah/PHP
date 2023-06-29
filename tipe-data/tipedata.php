<?php
// integer
echo "ini adalah integer";
echo "<br>";
$integer = 12;
echo $integer;

echo "<br>";

// double
echo "ini adalah double";
echo "<br>";
$double = 3.5;
echo $double;

echo "<br>";

// string
echo "ini adalah string";
echo "<br>";
$string = "Muni";
echo $string;

echo "<br>";

// boolean 
echo "ini adalah boolean";
echo "<br>";
$boolean = false;
    // var_dump() gunanya untuk mengetahui tipe data dan isi variabel tersebut
echo var_dump($boolean);
echo "<br>";

    // gettype() gunanya untuk mengetahui tipe datanya saja tanpa nilainya
echo gettype($boolean);
echo "<br>";


// object 
echo "ini adalah objek";
echo "<br>";

    // oop for php
class Mahasiswa {
    var $nama;
    var $umur;
}
$mahasiswa = new Mahasiswa();
$mahasiswa->nama = "budi";
$mahasiswa->umur = 19;


echo $mahasiswa->nama;
echo "<br>";
echo $mahasiswa->umur;
echo "<br>";


// array 
echo "ini adalah array";
echo "<br>";

$array = array("dono", 221, true);
    // cetak index 0
echo $array[2];
echo "<br>";

    // cetak keseluruhan array
for ($i = 0; $i < count($array); $i++){
    echo $array[$i]."<br>";
}

// null
echo "ini adalah null";
echo "<br>";

$nul = null;
echo $nul;


?>