// membuat form sederhana

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>membuat form sederhana</title>
</head>
<body>
    <h2>Masukkan Nama dan Email</h2>
    <form action="form2.php" method="post">
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
<!-- action="form2.php" untuk menuju ke file form2.php -->
<!-- method="post" untuk bisa mengakses method post/ memasukkan data dengan method post. -->
<!-- POST adalah metode pengiriman data yang datanya tidak disimpan pada url -->
<!-- name="nama" dan name="email" untuk bisa diakses dengan variabel $_POST["nama"] dan $_POST["email"] -->
