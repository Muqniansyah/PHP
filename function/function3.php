<?php

// function parameter default -> dapat memberikan nilai default untuk parameter, yang digunakan jika tidak ada nilai yang diberikan saat function dipanggil.
function greet($name = "tamu") {
    return "Hello, " . $name;
}

echo greet();


?>