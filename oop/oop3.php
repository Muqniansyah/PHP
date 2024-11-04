<?php
// Encapsulation (Penggunaan Access Modifier)

class BankAccount {
    // Property $saldo bersifat private, yang berarti tidak bisa diakses langsung dari luar class.
    private $saldo;

    public function __construct($saldo) {
        $this->saldo = $saldo;
    }

    // Getter untuk mendapatkan saldo
    public function getSaldo() {
        return $this->saldo;
    }

    // Method untuk menambah saldo
    public function tambahSaldo($jumlah) {
        $this->saldo += $jumlah;
    }

    // Method untuk menarik saldo
    public function tarikSaldo($jumlah) {
        if ($jumlah > $this->saldo) {
            return "Saldo tidak cukup!";
        } else {
            $this->saldo -= $jumlah;
            return "Berhasil menarik $jumlah.";
        }
    }
}

$akun = new BankAccount(1000);
echo $akun->getSaldo(); // Output: 1000
$akun->tambahSaldo(500);
echo $akun->getSaldo(); // Output: 1500
echo $akun->tarikSaldo(700); // Output: Berhasil menarik 700
echo $akun->getSaldo(); // Output: 800

// Ini merupakan contoh encapsulation, di mana data saldo dilindungi dan hanya bisa dimodifikasi melalui method yang disediakan.
?>
