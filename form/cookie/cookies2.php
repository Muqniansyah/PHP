<?php 

// cookies menyimpan informasi pengguna di browser pengguna.
setcookie("user", "muni", time() + (86400 * 30), "/"); // 86400 = 1 hari
if (isset($_COOKIE["user"])){
    echo "User is : " . $_COOKIE["user"];
}
?>