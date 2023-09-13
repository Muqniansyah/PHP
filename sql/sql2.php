<?php
// konek database
$server = "localhost";
$username = "root";
$password = "";
$database_name = "db_mahasiswa";

$con = mysqli_connect($server,$username,$password,$database_name);


// Memilih database yang akan digunakan
mysqli_select_db($con, $database_name);

// Fungsi INSERT: Memasukkan data baru ke dalam tabel
$sql_insert = "INSERT INTO data_mahasiswa (nama, alamat, umur, email) VALUES
('asya', 'jawa', 20, 'asyacom'),
('muni', 'bekasi', 23, 'municom'),
('bila', 'bandung', 25, 'bilacom'),
('remon', 'jakarta', 45, 'remoncom'), 
('tiara', 'sulawesi', 19, 'tiaracom'),
('raka', 'kalimantan', 18, 'rakacom'),
('bayu', 'depok', 23, 'bayucom'),
('bernard', 'makasar', 45, 'bernard@gmail.com'),
('randy', 'tangerang', 25, 'randycom')
";

if (mysqli_query($con, $sql_insert)) {
    echo "Data berhasil dimasukkan.<br>";
} else {
    echo "Gagal memasukkan data: " . mysqli_error($con) . "<br>";
}

// Fungsi INSERT: Memasukkan data baru ke dalam tabel data_guru 
$sql_insert_guru = "INSERT INTO data_guru (nama, alamat, umur, email) VALUES
    ('pak ahmad', 'Bekasi', 23, 'amadcom'),
    ('bu rika', 'Bandung', 45, 'rika@gmail.com'),
    ('mas adi', 'Jogja', 25, 'adicom')
";

if (mysqli_query($con, $sql_insert_guru)) {
    echo "Data berhasil dimasukkan ke dalam tabel 'data_guru'.<br>";
} else {
    echo "Gagal memasukkan data ke dalam tabel 'data_guru': " . mysqli_error($con) . "<br>";
}


?>
