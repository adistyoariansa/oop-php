<?php
class Robot {
    private $suara;
    private $berat;

    // Konstruktor untuk menginisialisasi properti suara
    public function __construct($suara, $berat = null) {
        $this->suara = $suara;
        $this->berat = $berat;
    }

    // Metode untuk mengatur suara
    public function set_suara($suara) {
        $this->suara = $suara;
    }

    public function set_berat($berat) {
        $this->berat = $berat;
    }

    // Metode untuk mendapatkan suara
    public function get_suara() {
        return $this->suara;
    }

    public function get_berat() {
        return $this->berat;
    }
}

class RobotHewan extends Robot {
    // Anda dapat menambahkan properti dan metode tambahan di sini
public function get_kekuatan(){
    echo 'saya hewan laut bisa berenang';
}
    
}

// Contoh penggunaan
//$robotHewan = new RobotHewan("Meow", 5);
//echo $robotHewan->get_suara(); // Output: Meow
//echo $robotHewan->get_berat(); // Output: 5
?>