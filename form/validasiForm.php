<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validasi form</title>
</head>
<body>
    
<?php
// menentukkan nilai variabel dan mengeset ke nilai kosongan.
$namaErr = $emailErr = $jenisKelaminErr = $websiteErr = " ";
$nama = $email = $jenisKelamin = $komentar = $website = " ";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // untuk nama
    if (empty($_POST["nama"])) {
        $namaErr = "Nama Wajib Diisi";
    }
    else{
        $nama = test_input($_POST["nama"]);
    }

    // untuk email
    if (empty($_POST["email"])) {
        $emailErr = "Email Wajib Diisi";
    }
    else{
        $email = test_input($_POST["email"]);
    }

    // untuk website
    if(empty($_POST["website"])){
        $website = " ";
    }
    else {
        $website = test_input($_POST["website"]);
    }

    // untuk komentar
    if (empty($_POST["komentar"])){
        $komentar = " ";
    }
    else {
        $komentar = test_input($_POST["komentar"]);
    }

    // untuk jenis kelamin 
    if (empty($_POST["jenisKelamin"])) {
        $jenisKelaminErr = "Jenis Kelamin Wajib Diisi";
    }
    else {
        $jenisKelamin = test_input($_POST["jenisKelamin"]);
    }
}

// fungsi tes input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!-- inputan data -->
<h2>Masukkan Data</h2>
<p><span class="error">* wajib diisi</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <h3>Nama</h3> 
    <input type="text" name="nama">
    <span class="error">* <?php echo $namaErr; ?></span>
        <br><br>

    <h3>Email</h3> 
    <input type="text" name="email">
    <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>

    <h3>Website</h3> 
    <input type="text" name="website">
    <span class="error">* <?php echo $websiteErr; ?></span>
        <br><br>

    <h3>Komentar</h3> <textarea name="komentar" cols="40" rows="5"></textarea>
        <br><br>

    <h3>Jenis Kelamin</h3> 
    <p><b>Perempuan</b></p>
    <input type="radio" name="jenisKelamin" value="perempuan">
    <p><b>laki - laki</b></p>
    <input type="radio" name="jenisKelamin" value="laki">
        <br><br>
    <span class="error">* <?php echo $jenisKelaminErr; ?></span>
        <br><br>

    <input type="submit" name="submit" value="Kirim Data">
</form>


<!-- OUTPUT -->
<?php
    echo "<h2> Data yang dimasukkan : </h2>";
    echo "Nama: ".$nama;
    echo "<br>";
    echo "Email: ".$email;
    echo "<br>";
    echo "Website: ".$website;
    echo "<br>";
    echo "Komentar: ".$komentar;
    echo "<br>";
    echo "Jenis Kelamin: ".$jenisKelamin;
?>
</body>
</html>