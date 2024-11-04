<?php

// arrow function adalah cara singkat untuk menulis anonymous function dengan syntax yang lebih ringkas.

// fn: Kata kunci untuk mendefinisikan arrow function
// parameter1, parameter2, …: Daftar parameter yang bisa diisi dengan nilai saat function dipanggil.
// expression: Ekspresi atau operasi yang menghasilkan nilai yang dikembalikan oleh function. Tidak memerlukan kata kunci return seperti pada function biasa
$sum = fn($a, $b) => $a + $b;

echo $sum(5, 10);

?>