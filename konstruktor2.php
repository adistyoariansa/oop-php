<?php
class robot {
    private $suara;
    private $berat;

    // Konstruktor untuk menginisialisasi properti suara
    public function __construct($suara, $berat= null) {
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
?>
