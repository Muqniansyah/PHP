<!-- buat table -->

<h3> Data barang </h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>Kode Barang </th>
        <th>Nama Barang </th>
        <th>Harga</th>
    </tr>

    <?php
    // memanggil file koneksi
    include "koneksi.php";

    // variabel untuk menyimpan nomor
    $no=1;
    // variabel $ambildata untuk memproses query dengan cara select untuk ambil semua kolom data dari tabel barang
    $ambildata = mysqli_query($koneksi,"select * from barang");
    // perulangan agar menampilkan semua data yang ada di variabel $ambildata dengan cara mysqli_fetch_array
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[kode_barang]</td>
            <td>$tampil[nama_barang]</td>
            <td>$tampil[harga_barang]</td>
        <tr>";
        // membuat nomernya bertambah
        $no++;
    }
    // <td>$tampil[kode_barang]</td> nama kolom dari tabelnya setelah variabel $tampil harus diperhatikan,karna jika salah penulisan maka tidak muncul.
    ?>
    </table>
<!-- akhir table -->

<!-- links -->
<br><br>
<p><a href="tambahData.php">tambah data</a></p>
<p><a href="hapusData.php">hapus data</a></p>


