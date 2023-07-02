<!-- PHP menyimpan semua variabel global di array dengan nama $_GLOBALS[index]. indeks ini menyimpan nama dari variabel -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Globals</title>
</head>
<body>
    <?php
    $x = 75;
    $y = 25;

    function penambahan() {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    penambahan();

    echo "Hasil Penjumlahan ".$z;

    ?>
</body>
</html>