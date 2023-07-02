<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanggal dan Waktu</title>
</head>
<body>
    <!-- tanggal -->
    <!-- d : untuk tanggal, m : untuk bulan, Y : untuk tahun, 1 : untuk nama hari dari tanggal. -->
    <h2>Tanggal dengan PHP</h2>
    <?php
    echo "Sekarang tanggal ".date("d/m/Y")."<br>";
    echo "Sekarang tanggal ".date("d.m.Y")."<br>";
    echo "Sekarang tanggal ".date("d-m-Y")."<br>";
    echo "Sekarang tanggal ".date("1");
    ?>
        <br><br><br>

    <!-- copyright -->
    <h2>Copyright yang dinamis</h2>
    &copy; 2010 - <?php echo date("Y"); ?>
        <br><br><br>

    <!-- waktu -->
    <!-- h : untuk format jam berbasis 12, i : untuk menit, s : untuk detik, a : untuk teks dalam waktu am atau pm. -->
    <h2>Waktu dengan PHP</h2>
    <?php
    echo "Sekarang Jam ".date("h:i:sa");
    ?>
</body>
</html>