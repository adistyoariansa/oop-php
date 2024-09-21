<?php
class Robot {
    protected $suara;
    protected $berat;

    public function __construct($suara, $berat) {
        $this->suara = $suara;
        $this->berat = $berat;
    }

    public function get_suara() {
        return 'Suara robot: ' . $this->suara;
    }

    public function get_berat() {
        return $this->berat;
    }
}

?>