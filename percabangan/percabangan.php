<?php

// if statement
$angka1 = 9;
echo "angka anda adalah ".$angka1."<br>";

if($angka1<10){
    echo "Angka anda kurang dari 10";
}

echo "<br>";

// if/else statement
$angka2 = 6;
echo "angka anda adalah ".$angka2."<br>";

if($angka2<5){
    echo "Angka anda kurang dari 5";
} else {
    echo "Angka anda lebih dari 5";
}

echo "<br>";

// nested if atau if bersarang
$angka3 = 11;
echo "angka anda adalah ".$angka3."<br>";

if($angka3<5){
    echo "Angka anda kurang dari 5";
} else if ($angka3<10){
    echo "Angka anda kurang dari 10";
} else {
    echo "Angka anda lebih dari 10";
}

?>