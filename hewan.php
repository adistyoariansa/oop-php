<?php
//innheritance atau perawisan (overiding method)
require_once 'robot.php';

class RobotHewan extends Robot {
    public function get_kekuatan() {
        echo 'Saya hewan laut bisa berenang';
    }

    // Overriding method
    public function get_suara() {
        return 'Suaranya adalah: ' . $this->suara;
    }
    public function testing(){
        echo self:: get_suara();
    }
}


?>