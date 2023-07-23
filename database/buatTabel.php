<?php
$con = mysqli_connect("localhost", "root", "",);

// if (!$con){
//     die('Ga bisa terhubung, ada errornya: ' . mysqli_error());
// }

// membuat table 
mysqli_select_db($con, "db_mysql_pake_php" );
$sql = "CREATE TABLE data_karyawan {
    nama varchar(15),
    alamat varchar(15),
    umur int
    }";

// execute query
mysqli_query($con, $sql);

echo "tabel data karyawan sudah kebuat";
mysqli_close($con);



?>