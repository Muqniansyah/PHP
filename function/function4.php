<?php

// anonymous function (closure)
// PHP juga mendukung anonymous function, yaitu function tanpa nama. Sering digunakan sebagai callback atau parameter untuk function lain.
// pada anonymous function, kita harus menggunakan use untuk membawa variabel dari luar ke dalam function.

$x = 10;

$add = function($y) use($x) {
    return $x + $y;
};

echo $add(5);

?>