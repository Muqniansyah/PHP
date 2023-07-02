<!-- jika ingin hapus session, bisa gunakan fungsi unset() atau session_destroy(). -->

<?php
session_start();

if (isset($_SESSION['kunjungan'])){
    unset($_SESSION['kunjungan']);
}

// noted :
// fungsi unset() untuk mengosongkan variabel session tertentu.
// fungsi session_destroy() akan me-reset session dan akan kehilangan semua data session tersimpan.
?>