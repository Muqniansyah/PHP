<?php
// Inheritance (Pewarisan)

class Mobil {
  public $merk;
  public $warna;

  public function __construct($merk, $warna) {
    $this->merk = $merk;
    $this->warna = $warna;
  }

  public function jalankan() {
    return "Mobil $this->merk berwarna $this->warna sedang berjalan.";
  }
}

// Class Turunan dari Mobil
class MobilBalap extends Mobil {
  public $kecepatan;

  public function __construct($merk, $warna, $kecepatan) {
    parent::__construct($merk, $warna); // Menggunakan constructor parent
    $this->kecepatan = $kecepatan;
  }

  public function jalankanCepat() {
    return "Mobil balap $this->merk dengan kecepatan $this->kecepatan km/jam sedang melaju!";
  }
}

$mobilBalap = new MobilBalap ("Ferrari", "Kuning", 200);
echo $mobilBalap->jalankanCepat();
?>