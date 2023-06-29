<?php

// operator assignment
$assignment=8;
echo $assignment += 4;
echo "<br>";

echo $assignment -= 4;
echo "<br>";

echo $assignment /= 4;
echo "<br>";

echo $assignment *= 4;
echo "<br>";

echo $assignment %= 4;
echo "<br>";

// operator aritmatika
$angka1 = 1;
$angka2 = 4;
$angka3 = 6;
$angka4 = 2;

echo "hasil perhitungan";
echo "<br>";
echo $angka1 + $angka2 - ($angka3 * $angka4 / $angka4);
echo "<br>";

echo "hasil sisa bagi dari ",$angka2 ," & " ,$angka4;
echo "<br>";
echo $angka2 % $angka4;
echo "<br>";


// operator  penyambungan, untuk menyambungkan teks string
echo "belajar "." php "." yuk ";
echo "<br>";

// operator perbandingan
echo var_dump(4==4);
echo "<br>";

echo var_dump(3!=4);
echo "<br>";

echo var_dump(4===4);
echo "<br>";

echo var_dump(5>4);
echo "<br>";

echo var_dump(2>=4);
echo "<br>";

echo var_dump(3<4);
echo "<br>";

echo var_dump(4<=4);
echo "<br>"."<br>";


// operator logika
echo var_dump(false||false);
echo "<br>";

echo var_dump(true or false);
echo "<br>";

echo var_dump(true xor true);
echo "<br>";

echo var_dump(true && false);
echo "<br>";

echo var_dump(true and true);
echo "<br>";

echo var_dump(!true);
echo "<br>";




?>