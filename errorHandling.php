<?php
// Error handling digunakan untuk menangani kesalahan secara efektif menggunakan try-catch.

try {
    $num = 2 / 0; // ini akan memicu error
} catch (Exception $e) {
    echo "caught exception: ", $e->getMessage();
}

?>