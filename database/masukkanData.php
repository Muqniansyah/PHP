<?php
$con = mysqli_connect("localhost", "root", "");

// if (!$con){
//     die('Ga bisa terhubung, ada errornya: ' . mysqli_error($con));
// }

mysqli_select_db($con, "db_mysql_pake_php");
mysqli_query($con, "INSERT INTO data_karyawan (nama, alamat, umur) VALUES ('joni', 'joey', '24')");
mysqli_query($con, "INSERT INTO data_karyawan (nama, alamat, umur) VALUES ('joko', 'suprayogo', '45')");

echo "2 Data sudah dimasukkan";
mysqli_close($con);
?>