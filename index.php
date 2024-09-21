<?php
require_once 'robot.php';
require_once 'hewan.php';

// Membuat objek dari class RobotHewan
$robotHewan = new RobotHewan('ngik ngik ngok', 50);

// Memanggil metode get_suara yang telah di-override
echo $robotHewan->get_suara(); // Output: Suaranya adalah: ngik ngik ngok

// Memanggil metode get_kekuatan
$robotHewan->get_kekuatan(); // Output: Saya hewan laut bisa berenang
?>