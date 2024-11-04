<?php 

// lexical scoping (closure binding)
// Salah satu fitur penting dari arrow function adalah lexical scoping. Artinya, arrow function otomatis membawa (bind) variabel dari scope (ruang lingkup) di mana function tersebut didefinisikan, tanpa harus menggunakan kata kunci use.
$x = 10;
$add = fn($y) => $x + $y;

echo $add(5);

// Dalam arrow function di atas, $x diambil dari variabel luar function tanpa harus menggunakan use($x) seperti pada anonymous function. PHP secara otomatis mengakses variabel dari lingkungan di luar arrow function tersebut



?>