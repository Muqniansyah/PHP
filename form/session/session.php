<!-- untuk memulai session, perlu mendeklarasikan fungsi session_start(). ini bisa dijalankan sebelum tag <html>. -->

<?php
session_start();
// menyimpan data session
$_SESSION['views'] = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
</head>
<body>
    <?php
    // mengambil data session
    echo "Kunjungan = ".$_SESSION['views'];
    ?>
</body>
</html>


<!-- noted : -->
<!-- cara kerja session : membuat unik ID(UID) untuk tiap pengunjung & menyimpan variabel berdasarkan ID(UID) ini. -->
<!-- ID(UID) bisa disimpan di cookie atau dipropagasikan di URL. -->