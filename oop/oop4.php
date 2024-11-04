<?php
// Polymorphism memungkinkan penggunaan method yang sama namun menghasilkan perilaku berbeda tergantung dari class yang menggunakannya.

class Hewan {
    public function suara() {
        return "Hewan mengeluarkan suara.";
    }
}

class Anjing extends Hewan {
    public function suara() {
        return "Anjing menggonggong.";
    }
}

class Kucing extends Hewan {
    public function suara() {
        return "Kucing mengeong.";
    }
}
$hewan = new Hewan();
$anjing = new Anjing();
$kucing = new Kucing();
echo $hewan->suara(); // Output: Hewan mengeluarkan suara.
echo $anjing->suara(); // Output: Anjing menggonggong.
echo $kucing->suara(); // Output: Kucing mengeong.

// Method suara di class Hewan di-override oleh subclass Anjing dan Kucing.
// Meski menggunakan method yang sama (suara), setiap subclass memiliki implementasi yang berbeda

?>