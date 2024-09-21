<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1> procedural<h1>
<body>
    <?php
    //class
    class robot{
        //property
        public $suara = "ngik ngik";
        public $berat = 30;
    }

    $robot1 = new robot;
    echo 'suaraq robotnya....'.   $robot1->suara . ' beratnya ' . $robot1->berat;
    ?>
</body>
</html>