<?php
$con = mysqli_connect("localhost", "root", "");

// if (!$con){
//     die('Ga bisa terhubung, ada errornya: ' . mysqli_error($con));
// }

mysqli_select_db($con, "db_mysql_pake_php");
$isi_tabel = mysqli_query($con, "SELECT * FROM data_karyawan");

echo "<h1> ini dia datanya : </h1>";

while ($row = mysqli_fetch_array($isi_tabel)){
    echo $row["nama"]." ".$row["alamat"]." ".$row["umur"];
    echo "<br>";
}

mysqli_close($con);
?>