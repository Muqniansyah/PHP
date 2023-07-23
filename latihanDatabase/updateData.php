<?php
include "koneksi.php";
// variabel $sql untuk memproses query dengan cara konek database dan select untuk ambil semua kolom data dari tabel barang dimana yang pilih adalah kode yang sama dengan kode yang diklik.
$sql=mysqli_query($koneksi,"select * from barang where kode_barang='$_GET[kode]'");
$data=mysqli_fetch_array($sql);

?>

<h3> Ubah Data Barang </h3>

<form action="" method="post">
<table>
    <tr>
        <td width="120"> Kode Barang </td>
        <!--value="<?php echo $data['kode_barang']; ?>" untuk menampilkan data kode barang  -->
        <td> <input type="text" name="kode_barang" value="<?php echo $data['kode_barang']; ?>"> </td>
    </tr>
    <tr>
        <td> Nama Barang </td>
        <td> <input type="text" name="nama_barang" value="<?php echo $data['nama_barang']; ?>"> </td>
    </tr>
    <tr>
        <td> Harga </td>
        <td> <input type="text" name="harga" value="<?php echo $data['harga_barang']; ?>"> </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Ubah"> </td>
    </tr>
</table>

</form>

<?php
include "koneksi.php";
// ketika tombol proses di klik, maka 
if(isset($_POST['proses'])){
    // jalankan querynya update
mysqli_query($koneksi, "update barang set  
nama_barang = '$_POST[nama_barang]',
harga_barang = '$_POST[harga]'
where kode_barang = '$_GET[kode]'"); // kode_barang mana yang diklik

// notifikasi jika berhasil
echo "Data barang telah diubah";
// merefresh setalah data terubah
echo "<meta http-equiv=refresh content=1;URL='hapusData.php'>";

}

?>