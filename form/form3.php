// membuat form sederhana dengan method get

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>membuat form sederhana</title>
</head>
<body>
    <h2>Masukkan Nama dan Email</h2>
    <form action="form4.php" method="get">
        <h3>Nama:</h3> 
        <input type="text" name="nama">
            <br>
        <h3>email</h3>
        <input type="text" name="email">
            <br><br><br>
        <input type="submit">
    </form>
</body>
</html>

<!-- keterangan -->
<!-- action="form4.php" untuk menuju ke file form4.php -->
<!-- method="get" untuk bisa mengakses method get/ memasukkan data dengan method get. -->
<!-- GET adalah metode pengiriman data yang datanya disimpan pada url -->
<!-- name="nama" dan name="email" untuk bisa diakses dengan variabel $_GET["nama"] dan $_GET["email"] -->
