<?php

// Session menyimpan informasi pengguna di server
session_start();
$_SESSION["username"] = "muni";
echo "Session Username: " . $_SESSION["username"];

?>