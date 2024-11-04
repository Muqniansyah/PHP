<?php
// membuat class dan object

class Mobil {
    // Property
    public $merk;
    public $warna;

    // Constructor untuk inisialisasi property
    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    // Method
    public function jalankan() {
        return "Mobil $this->merk berwarna $this->warna sedang berjalan.";
    }
}

// Membuat objek dari class Mobil
$mobil1 = new Mobil("Toyota", "Merah");
echo $mobil1->jalankan();
?>