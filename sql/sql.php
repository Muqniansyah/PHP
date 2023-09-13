<?php
$con = mysqli_connect("localhost", "root", "");

// cek koneksi
if(!$con) {
    die("koneksi gagal : ".mysqli_connect_error());
}


// buat database
// Nama database yang akan dibuat atau digunakan
$database_name = "db_mahasiswa";

// Mengecek apakah database sudah ada atau belum
$check_database = mysqli_query($con, "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$database_name'");

// Jika database belum ada, maka buat database
if (mysqli_num_rows($check_database) == 0) {
    $sql = "CREATE DATABASE $database_name";

    if (mysqli_query($con, $sql)) {
        echo "Database '$database_name' berhasil dibuat.";
    } else {
        echo "Gagal membuat database: " . mysqli_error($con);
    }
} else {
    echo "Database '$database_name' sudah ada.";
}

echo "<br> <br> <br>";

// Memilih database yang akan digunakan
mysqli_select_db($con, $database_name);

// Mengecek apakah table sudah ada atau belum
$cek_table = mysqli_query($con, "SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = '$database_name' AND TABLE_NAME = 'data_mahasiswa'");

// Jika table belum ada, maka buat table
if (mysqli_num_rows($cek_table) == 0) {
    // Membuat tabel data_mahasiswa
    $table_mahasiswa = "CREATE TABLE data_mahasiswa (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(15) NOT NULL,
        alamat VARCHAR(15),
        umur INT NOT NULL,
        email VARCHAR(255) UNIQUE,
        CONSTRAINT chk_umur CHECK (umur >= 0),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if (mysqli_query($con, $table_mahasiswa)) {
        echo "Tabel 'data_mahasiswa' berhasil dibuat.<br>";
    } else {
        echo "Gagal membuat tabel 'data_mahasiswa': " . mysqli_error($con) . "<br>";
    }
} else {
    echo "Tabel 'data_mahasiswa' sudah ada.<br>";
}

echo "<br> <br> <br>";

// Mengecek apakah tabel 'data_guru' sudah ada atau belum
$cek_table_guru = mysqli_query($con, "SHOW TABLES LIKE 'data_guru'");

if (mysqli_num_rows($cek_table_guru) == 0) {
    // Membuat tabel data_guru dengan struktur yang sama seperti data_mahasiswa
    $table_guru = "CREATE TABLE data_guru (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(15) NOT NULL,
        alamat VARCHAR(15),
        umur INT NOT NULL,
        email VARCHAR(255) UNIQUE,
        CONSTRAINT fk_data_mahasiswa FOREIGN KEY (umur) REFERENCES data_mahasiswa(umur)
    )";

    if (mysqli_query($con, $table_guru)) {
        echo "Tabel 'data_guru' berhasil dibuat dengan struktur yang sama seperti 'data_mahasiswa'.<br>";
    } else {
        echo "Gagal membuat tabel 'data_guru': " . mysqli_error($con) . "<br>";
    }
} else {
    echo "Tabel 'data_guru' sudah ada.<br>";
}

echo "<br> <br> <br>";

// menambahkan kolom pada table 
// menambahkan kolom 'telepon' dengan DEFAULT
// Mengecek apakah kolom 'telepon' sudah ada atau belum
$check_column_telepon = mysqli_query($con, "SHOW COLUMNS FROM data_mahasiswa LIKE 'telepon'");

// Jika kolom 'telepon' belum ada, maka tambahkan kolom 'email'
if (mysqli_num_rows($check_column_telepon) == 0) {
    $alter_query = "ALTER TABLE data_mahasiswa ADD telepon VARCHAR(15) DEFAULT 'Tidak ada'";
    
    if (mysqli_query($con, $alter_query)) {
        echo "Kolom 'telepon' berhasil ditambahkan ke tabel.<br>";
    } else {
        echo "Gagal menambahkan kolom 'telepon': " . mysqli_error($con);
    }
} else {
    echo "Kolom 'telepon' sudah ada dalam tabel.<br>";
}

echo "<br> <br> <br>";

// Fungsi SELECT: Mengambil data dari tabel data_mahasiswa dengan nama 'bila' atau umur <= 25
$sql_select_mahasiswa = "SELECT * FROM data_mahasiswa WHERE nama = 'bila' OR umur <= 25";
$result_mahasiswa = mysqli_query($con, $sql_select_mahasiswa);

if (mysqli_num_rows($result_mahasiswa) > 0) {
    while ($row = mysqli_fetch_assoc($result_mahasiswa)) {
        echo "Data Mahasiswa - Nama: " . $row["nama"] . ", Alamat: " . $row["alamat"] . ", Umur: " . $row["umur"] . ", Email: " . $row["email"] . "<br>";
    }
} else {
    echo "Tidak ada data mahasiswa dengan nama 'bila' atau umur <= 25.<br>";
}


echo "<br> <br> <br>";

// Fungsi SELECT: Mengambil data dari tabel data_mahasiswa dengan nama 'bila'
$sql_select_mahasiswa = "SELECT * FROM data_mahasiswa WHERE nama = 'bila'";
$result_mahasiswa = mysqli_query($con, $sql_select_mahasiswa);

if (mysqli_num_rows($result_mahasiswa) > 0) {
    while ($row = mysqli_fetch_assoc($result_mahasiswa)) {
        echo "Data Mahasiswa - Nama: " . $row["nama"] . ", Alamat: " . $row["alamat"] . ", Umur: " . $row["umur"] . ", Email: " . $row["email"] . "<br>";
    }
} else {
    echo "Tidak ada data mahasiswa dengan nama 'bila'.<br>";
}

echo "<br> <br> <br>";

// Fungsi SELECT: Mengambil data dari tabel data_guru dengan nama 'mas adi'
$sql_select_guru = "SELECT * FROM data_guru WHERE nama = 'mas adi'";
$result_guru = mysqli_query($con, $sql_select_guru);

if (mysqli_num_rows($result_guru) > 0) {
    while ($row = mysqli_fetch_assoc($result_guru)) {
        echo "Data Guru - Nama: " . $row["nama"] . ", Alamat: " . $row["alamat"] . ", Umur: " . $row["umur"] . ", Email: " . $row["email"] . "<br>";
    }
} else {
    echo "Tidak ada data guru dengan nama 'mas adi'.<br>";
}

echo "<br> <br> <br>";

// Fungsi SELECT DISTINCT: Mengambil data unik dari kolom umur
$sql_select_distinct = "SELECT DISTINCT umur FROM data_mahasiswa";
$result_distinct = mysqli_query($con, $sql_select_distinct);

if (mysqli_num_rows($result_distinct) > 0) {
    echo "Umur Mahasiswa yang Berbeda:<br>";
    while ($row = mysqli_fetch_assoc($result_distinct)) {
        echo "Umur: " . $row["umur"] . "<br>";
    }
} else {
    echo "Tidak ada data umur yang berbeda.<br>";
}

echo "<br> <br> <br>";

// Fungsi LIKE: Mengambil data mahasiswa dengan nama yang mengandung 'mon'
$sql_like = "SELECT * FROM data_mahasiswa WHERE nama LIKE '%mon%'";
$result_like = mysqli_query($con, $sql_like);

if (mysqli_num_rows($result_like) > 0) {
    echo "Data Mahasiswa dengan Nama Mengandung 'mon':<br>";
    while ($row = mysqli_fetch_assoc($result_like)) {
        echo "Nama: " . $row["nama"] . "<br>";
    }
} else {
    echo "Tidak ada data mahasiswa dengan nama mengandung 'mon'.<br>";
}

echo "<br> <br> <br>";

// Fungsi DELETE: Menghapus data dari tabel 'data_mahasiswa' yang memiliki nilai 'nama' sama dengan 'muni'
$sql_delete_mahasiswa = "DELETE FROM data_mahasiswa WHERE nama= 'muni'";

if (mysqli_query($con, $sql_delete_mahasiswa)) {
    echo "Data dari tabel 'data_mahasiswa' berhasil dihapus.<br>";
} else {
    echo "Gagal menghapus data dari tabel 'data_mahasiswa': " . mysqli_error($con) . "<br>";
}

echo "<br> <br> <br>";

// Fungsi DELETE: Menghapus data dari tabel 'data_guru' yang memiliki nilai 'nama' sama dengan 'bu rika'
$sql_delete_guru = "DELETE FROM data_guru WHERE nama = 'bu rika'";

if (mysqli_query($con, $sql_delete_guru)) {
    echo "Data dari tabel 'data_guru' berhasil dihapus.<br>";
} else {
    echo "Gagal menghapus data dari tabel 'data_guru': " . mysqli_error($con) . "<br>";
}

echo "<br> <br> <br>";

// Fungsi UPDATE: Memperbarui data dalam tabel
$sql_update = "UPDATE data_mahasiswa SET alamat = '123 Jalan XYZ' WHERE nama = 'bila'  -- WHERE nama='bila'";

if (mysqli_query($con, $sql_update)) {
    echo "Data berhasil diperbarui.<br>";
} else {
    echo "Gagal memperbarui data: " . mysqli_error($con) . "<br>";
}

echo "<br> <br> <br>";

// Fungsi ORDER BY: Mengambil data dari tabel 'data_mahasiswa' dan mengurutkannya berdasarkan umur secara menaik
$sql_order_by = "SELECT * FROM data_mahasiswa ORDER BY umur ASC";
$result_order_by = mysqli_query($con, $sql_order_by);

if (mysqli_num_rows($result_order_by) > 0) {
    echo "Data Mahasiswa diurutkan berdasarkan Umur secara menaik:<br>";
    while ($row = mysqli_fetch_assoc($result_order_by)) {
        echo "Nama: " . $row["nama"] . ", Umur: " . $row["umur"] . "<br>";
    }
} else {
    echo "Tidak ada data mahasiswa.<br>";
}

echo "<br> <br> <br>";

// Fungsi GROUP BY: Mengambil data dari tabel 'data_mahasiswa' dan mengelompokkannya berdasarkan umur
$sql_group_by = "SELECT umur, COUNT(*) as total_mahasiswa FROM data_mahasiswa GROUP BY umur";
$result_group_by = mysqli_query($con, $sql_group_by);

if (mysqli_num_rows($result_group_by) > 0) {
    echo "Jumlah Mahasiswa berdasarkan Umur:<br>";
    while ($row = mysqli_fetch_assoc($result_group_by)) {
        echo "Umur: " . $row["umur"] . ", Jumlah: " . $row["total_mahasiswa"] . "<br>";
    }
} else {
    echo "Tidak ada data mahasiswa.<br>";
}

echo "<br> <br> <br>";

// Fungsi INNER JOIN: Menggabungkan data dari tabel 'data_mahasiswa' dan 'data_guru' berdasarkan umur
$sql_inner_join = "SELECT data_mahasiswa.nama AS nama_mahasiswa, data_guru.nama AS nama_guru FROM data_mahasiswa INNER JOIN data_guru ON data_mahasiswa.umur = data_guru.umur";

$result_inner_join = mysqli_query($con, $sql_inner_join);

if (mysqli_num_rows($result_inner_join) > 0) {
    echo "Penggabungan data Mahasiswa dan Guru berdasarkan Umur:<br>";
    while ($row = mysqli_fetch_assoc($result_inner_join)) {
        echo "Mahasiswa: " . $row["nama_mahasiswa"] . ", Guru: " . $row["nama_guru"] . "<br>";
    }
} else {
    echo "Tidak ada data yang cocok.<br>";
}

echo "<br> <br> <br>";

// Fungsi LEFT JOIN: Menggabungkan semua data dari 'data_mahasiswa' dengan yang cocok dari 'data_guru' berdasarkan umur
$sql_left_join = "SELECT data_mahasiswa.nama AS nama_mahasiswa, data_guru.nama AS nama_guru FROM data_mahasiswa LEFT JOIN data_guru ON data_mahasiswa.umur = data_guru.umur";

$result_left_join = mysqli_query($con, $sql_left_join);

if (mysqli_num_rows($result_left_join) > 0) {
    echo "Penggabungan data Mahasiswa dan Guru dengan LEFT JOIN berdasarkan Umur:<br>";
    while ($row = mysqli_fetch_assoc($result_left_join)) {
        echo "Mahasiswa: " . $row["nama_mahasiswa"] . ", Guru: " . $row["nama_guru"] . "<br>";
    }
} else {
    echo "Tidak ada data yang cocok.<br>";
}

echo "<br> <br> <br>";

// Fungsi RIGHT JOIN: Menggabungkan semua data dari 'data_guru' dengan yang cocok dari 'data_mahasiswa' berdasarkan umur
$sql_right_join = "SELECT data_mahasiswa.nama AS nama_mahasiswa, data_guru.nama AS nama_guru FROM data_mahasiswa RIGHT JOIN data_guru ON data_mahasiswa.umur = data_guru.umur";

$result_right_join = mysqli_query($con, $sql_right_join);

if (mysqli_num_rows($result_right_join) > 0) {
    echo "Penggabungan data Mahasiswa dan Guru dengan RIGHT JOIN berdasarkan Umur:<br>";
    while ($row = mysqli_fetch_assoc($result_right_join)) {
        echo "Mahasiswa: " . $row["nama_mahasiswa"] . ", Guru: " . $row["nama_guru"] . "<br>";
    }
} else {
    echo "Tidak ada data yang cocok.<br>";
}

echo "<br> <br> <br>";

// CREATE INDEX
$check_index_query = "SHOW INDEX FROM data_mahasiswa WHERE Key_name = 'idx_umur'";
$result_check_index = mysqli_query($con, $check_index_query);

if (mysqli_num_rows($result_check_index) == 0) {
    $create_index_query = "CREATE INDEX idx_umur ON data_mahasiswa (umur)";
    if (mysqli_query($con, $create_index_query)) {
        echo "Index 'idx_umur' berhasil dibuat pada tabel 'data_mahasiswa'.<br>";
    } else {
        echo "Gagal membuat index: " . mysqli_error($con) . "<br>";
    }
} else {
    echo "Index 'idx_umur' sudah ada dalam tabel 'data_mahasiswa'.<br>";
}

echo "<br> <br> <br>";

// Menggunakan MIN(), MAX(), SUM(), dan AVG()
$sql_min_max = "SELECT MIN(umur) as min_umur, MAX(umur) as max_umur, SUM(umur) as total_umur, AVG(umur) as rata_umur FROM data_mahasiswa";
$result_min_max = mysqli_query($con, $sql_min_max);

if (mysqli_num_rows($result_min_max) > 0) {
    $row = mysqli_fetch_assoc($result_min_max);
    echo "Umur Minimum: " . $row["min_umur"] . "<br>";
    echo "Umur Maksimum: " . $row["max_umur"] . "<br>";
    echo "Total Umur: " . $row["total_umur"] . "<br>";
    echo "Rata-rata Umur: " . $row["rata_umur"] . "<br>";
} else {
    echo "Tidak ada data umur.<br>";
}

echo "<br> <br> <br>";

// Menggunakan BETWEEN
$sql_between = "SELECT * FROM data_mahasiswa WHERE umur BETWEEN 20 AND 30";
$result_between = mysqli_query($con, $sql_between);

if (mysqli_num_rows($result_between) > 0) {
    echo "Data Mahasiswa dengan Umur Antara 20 dan 30:<br>";
    while ($row = mysqli_fetch_assoc($result_between)) {
        echo "Nama: " . $row["nama"] . ", Umur: " . $row["umur"] . "<br>";
    }
} else {
    echo "Tidak ada data mahasiswa dengan umur antara 20 dan 30.<br>";
}

// Fungsi DESCRIBE: Mendapatkan informasi tentang struktur tabel 'data_mahasiswa'
$sql_describe = "DESCRIBE data_mahasiswa";
$result_describe = mysqli_query($con, $sql_describe);

if ($result_describe) {
    echo "Informasi struktur tabel 'data_mahasiswa':<br>";
    while ($row = mysqli_fetch_assoc($result_describe)) {
        echo "Nama Kolom: " . $row["Field"] . ", Tipe Data: " . $row["Type"] . "<br>";
    }
} else {
    echo "Gagal mendapatkan informasi struktur tabel 'data_mahasiswa': " . mysqli_error($con) . "<br>";
}

echo "<br> <br> <br>";


// Fungsi SHOW: Mendapatkan daftar tabel dalam basis data
$sql_show_tables = "SHOW TABLES";
$result_show_tables = mysqli_query($con, $sql_show_tables);

if ($result_show_tables) {
    echo "Daftar tabel dalam basis data:<br>";
    while ($row = mysqli_fetch_row($result_show_tables)) {
        echo $row[0] . "<br>";
    }
} else {
    echo "Gagal mendapatkan daftar tabel dalam basis data: " . mysqli_error($con) . "<br>";
}

echo "<br> <br> <br>";

// Fungsi IN: Mengambil data dari tabel 'data_mahasiswa' dengan umur dalam daftar tertentu
$umur_list = "20, 25, 30"; // Daftar umur yang dicari
$sql_in = "SELECT * FROM data_mahasiswa WHERE umur IN ($umur_list)";
$result_in = mysqli_query($con, $sql_in);

if (mysqli_num_rows($result_in) > 0) {
    echo "Data Mahasiswa dengan umur dalam daftar tertentu:<br>";
    while ($row = mysqli_fetch_assoc($result_in)) {
        echo "Nama: " . $row["nama"] . ", Umur: " . $row["umur"] . "<br>";
    }
} else {
    echo "Tidak ada data mahasiswa dengan umur dalam daftar tertentu.<br>";
}

echo "<br> <br> <br>";

// Fungsi UNION: Menggabungkan hasil dari dua pernyataan SELECT
$sql_union = "SELECT nama FROM data_mahasiswa UNION SELECT nama FROM data_guru";
$result_union = mysqli_query($con, $sql_union);

if (mysqli_num_rows($result_union) > 0) {
    echo "Hasil UNION dari tabel 'data_mahasiswa' dan 'data_guru':<br>";
    while ($row = mysqli_fetch_assoc($result_union)) {
        echo "Nama: " . $row["nama"] . "<br>";
    }
} else {
    echo "Tidak ada data yang cocok.<br>";
}

echo "<br> <br> <br>";

// Fungsi HAVING: Menggunakan pernyataan GROUP BY dan HAVING
$sql_group_by_having = "SELECT umur, COUNT(*) as total_mahasiswa FROM data_mahasiswa GROUP BY umur HAVING total_mahasiswa > 1";
$result_group_by_having = mysqli_query($con, $sql_group_by_having);

if (mysqli_num_rows($result_group_by_having) > 0) {
    echo "Jumlah Mahasiswa berdasarkan Umur (yang memiliki lebih dari 1 mahasiswa):<br>";
    while ($row = mysqli_fetch_assoc($result_group_by_having)) {
        echo "Umur: " . $row["umur"] . ", Jumlah: " . $row["total_mahasiswa"] . "<br>";
    }
} else {
    echo "Tidak ada data yang cocok.<br>";
}

echo "<br> <br> <br>";

// Fungsi NOT: Mengambil data dari tabel 'data_mahasiswa' dengan umur bukan 25
$sql_not = "SELECT * FROM data_mahasiswa WHERE NOT umur = 25";
$result_not = mysqli_query($con, $sql_not);

if (mysqli_num_rows($result_not) > 0) {
    echo "Data Mahasiswa dengan umur bukan 25:<br>";
    while ($row = mysqli_fetch_assoc($result_not)) {
        echo "Nama: " . $row["nama"] . ", Umur: " . $row["umur"] . "<br>";
    }
} else {
    echo "Tidak ada data mahasiswa dengan umur bukan 25.<br>";
}

echo "<br> <br> <br>";


// Fungsi SELECT: Mengambil data dari tabel data_mahasiswa dengan nama 'raka' atau umur <= 25, dengan LIMIT dan OFFSET
$limit = 10; // Jumlah data yang ingin Anda tampilkan
$offset = 0; // Mulai dari baris ke-0

$sql_select_mahasiswa = "SELECT * FROM data_mahasiswa WHERE nama = 'raka' OR umur <= 25 LIMIT $limit OFFSET $offset";
$result_mahasiswa = mysqli_query($con, $sql_select_mahasiswa);

if (mysqli_num_rows($result_mahasiswa) > 0) {
    while ($row = mysqli_fetch_assoc($result_mahasiswa)) {
        echo "Data Mahasiswa - Nama: " . $row["nama"] . ", Alamat: " . $row["alamat"] . ", Umur: " . $row["umur"] . ", Email: " . $row["email"] . "<br>";
    }
} else {
    echo "Tidak ada data mahasiswa dengan nama 'raka' atau umur <= 25.<br>";
}

echo "<br> <br> <br>";

// Fungsi INSERT INTO SELECT: Mengisi data ke dalam 'data_mahasiswa' dari 'data_guru'
$sql_insert_into_select = "INSERT INTO data_mahasiswa (nama, alamat, umur, email) SELECT nama, alamat, umur, email FROM data_guru";
if (mysqli_query($con, $sql_insert_into_select)) {
    echo "Data berhasil dimasukkan ke dalam tabel 'data_mahasiswa' dari 'data_guru'.<br>";
} else {
    echo "Gagal mengisi data ke dalam tabel 'data_mahasiswa': " . mysqli_error($con) . "<br>";
}

echo "<br> <br> <br>";

// Fungsi CREATE TABLE ... AS SELECT: Membuat tabel baru 'data_pekerja' dengan data dari 'data_mahasiswa'
$sql_select_into = "CREATE TABLE IF NOT EXISTS data_pekerja AS SELECT * FROM data_mahasiswa";
if (mysqli_query($con, $sql_select_into)) {
    echo "Tabel 'data_pekerja' berhasil dibuat dengan data dari 'data_mahasiswa'.<br>";
} else {
    echo "Gagal membuat atau mengisi tabel 'data_pekerja': " . mysqli_error($con) . "<br>";
}



// tutup koneksi
mysqli_close($con);

?>