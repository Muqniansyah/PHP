<!-- form tabel dengan html -->
<h3> Tambah Barang </h3>

<form action="" method="post">
<table>
    <tr>
        <td width="120"> Kode Barang </td>
        <td> <input type="text" name="kode_barang"> </td>
    </tr>
    <tr>
        <td> Nama Barang </td>
        <td> <input type="text" name="nama_barang"> </td>
    </tr>
    <tr>
        <td> Harga </td>
        <td> <input type="text" name="harga_barang"> </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Simpan"> </td>
    </tr>
</table>

</form>

<!-- akhir form tabel -->


<?php
// memanggil file koneksi
include "koneksi.php";

// ketika tombol proses di klik, maka 
if(isset($_POST['proses'])){
    // jalankan querynya insert
mysqli_query($koneksi, "insert into barang set  
kode_barang = '$_POST[kode_barang]',
nama_barang = '$_POST[nama_barang]',
harga_barang = '$_POST[harga_barang]'"); // bagian kiri 'kode_barang' databasenya dan bagian kanan '$_POST[kode_barang]' inputannya

echo "Data barang baru telah tersimpan";

}

?>

<!-- links -->
<br><br>
<p><a href="tampilData.php">lihat data</a></p>