<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1> kunstroktor<h1>
<body>
    <?php
    require_once 'konstruktor2.php';
    $robot1 = new robot ('ngik ngik ngok', 20);
    $robot2 = new robot('titut titut',30);

    echo 'beratnya : ' . $robot1->get_berat(). ' kg<br>';

    echo ' beratnya : ' .$robot2->get_berat() . ' kg<br>';

    ?>
</body>
</html>