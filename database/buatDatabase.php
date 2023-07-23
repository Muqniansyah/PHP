<?php
// password di server dikosongkan
// asumsinya MySQL server tidak pake password
// jadi yang terakhir tidak dikasih apa apa

// variabel con untuk membuat connect mysql dengan localhost
$con = mysqli_connect("localhost", "root", "");

// if (!$con){
//     die('Ga bisa terhubung, ada errornya: ' . mysqli_error($con));
// }

if (mysqli_query($con,"CREATE DATABASE db_mysql_pake_php" )){
    echo "Database terbuat nih";
}
else {
    echo "Error waktu buat database : ".mysqli_error($con);
}
mysqli_close($con);

?>