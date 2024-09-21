<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1> metode<h1>
<body>
    <?php
    //class
    class robot{
        //property
        public $suara;
        public $berat;

        //metode set & metode get
        public function set_suara($suara){
            $this->suara = $suara;

        }
        public function get_suara(){
            return $this->suara;
        }
        public function set_berat($berat){
        $this->berat = $berat;
         }

         public function get_berat(){
           return $this->berat;
             }
    }

    $robot1 = new robot;
    $robot2 = new robot;
    $robot1->set_suara('ngik ngik ngok');
    echo 'bunyinya...' .$robot1->get_suara();

    $robot2->set_suara('titut titut');
    echo ' <br> bunyinya...' .$robot2->get_suara();

    $robot3 = new robot;
    $robot3->set_berat('74 & 75');
    echo '<br> beratnya adalah' . $robot3->get_berat();
    ?>
</body>
</html>