<?php
// Koneksi database
$server = "localhost";
$username = "root";
$password = "";
$database_name = "db_mahasiswa";

$con = mysqli_connect($server, $username, $password, $database_name);

// Periksa koneksi database
if (mysqli_connect_errno()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Ambil data dari tabel
$tabel_mahasiswa = mysqli_query($con, "SELECT * FROM data_mahasiswa");

// Inisialisasi array untuk menampung data
$data_mahasiswa = array();

// Loop untuk mengambil data
while ($row = mysqli_fetch_assoc($tabel_mahasiswa)) {
    $data_mahasiswa[] = $row;
}

// Konversi data menjadi JSON
$results = json_encode($data_mahasiswa);

// Tampilkan hasil JSON
echo $results;
?>
