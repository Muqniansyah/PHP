<link rel="stylesheet" href="style.css">

<h3> Data barang </h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>Kode Barang </th>
        <th>Nama Barang </th>
        <th>Harga</th>
        <th colspan="2">Aksi</th>
    </tr>

    <?php
    include "koneksi.php";

    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from barang");
    while($tampil = mysqli_fetch_array($ambildata)){
        // membuat warna pada tabel row pada baris tabel
        $warna = ($no%2==1)?"white":"#eee";
        // menambahkan dua kolom hapus dan ubah setelah <td>$tampil[harga_barang]</td>
        // didalam link, dibuat variabel kode=$tampil[kode_barang]
        // dan didalam kolom ubah tambahkan link, href='updateData.php (link menuju ke file updateData.php)
        echo "
        <tr bgcolor='$warna'>
            <td>$no</td>
            <td>$tampil[kode_barang]</td>
            <td>$tampil[nama_barang]</td>
            <td>$tampil[harga_barang]</td>
            <td><a href='?kode=$tampil[kode_barang]'> Hapus </a></td>
            <td><a href='updateData.php?kode=$tampil[kode_barang]'> Ubah </a></td>
        <tr>";
        $no++;
    }
    ?>
    </table>

    <?php
    include "koneksi.php";

    // pada saat variabel kode di klik
    if(isset($_GET['kode'])){
        // hapus data dari tabel barang,dimana yang dihapus adalah kode yang sama dengan kode yang diklik
    mysqli_query($koneksi,"delete  from barang where kode_barang='$_GET[kode]'");
    
    // notifikasi jika berhasil
    echo "Data berhasil dihapus";
    // merefresh setalah data terhapus
    echo "<meta http-equiv=refresh content=2;URL='hapusData.php'>";
    }   
    ?>

    <!-- links -->
<br><br>
<p><a href="tampilData.php">lihat data</a></p>
<br>
<p><a href="tambahData.php">tambah data</a></p>

