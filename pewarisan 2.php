<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1> pewarisan</h1>
<body>
<?php
// Definisikan kelas Robot terlebih dahulu
class Robot {
    private $suara;
    private $berat;

    // Constructor untuk inisialisasi properti
    public function __construct($suara, $berat) {
        $this->suara = $suara;
        $this->berat = $berat;
    }

    // Metode untuk mendapatkan berat
    public function get_berat() {
        return $this->berat;
    }
}

// Membuat objek dari class Robot
$robot = new Robot('ngik ngik ngok', 50);

// Memanggil metode get_berat
echo $robot->get_berat();


?>
</body>
</html>