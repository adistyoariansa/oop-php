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
        public $suara = "ngik ngik";
        public $berat = 30;

        //metode
        public function bersuara(){
            echo 'suara robotnya....' . $this-> suara;
        }
        public function berat_robot(){
            return $this->berat;
        }
    }

    $robot1 = new robot;
    $robot1 -> bersuara();
    echo $robot1->berat_robot();
    ?>
</body>
</html>