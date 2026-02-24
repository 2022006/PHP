<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $edad = 17;
    $dias = 0;
    $horas = 0;
    $minutos = 0;


    $dias = ($edad * 365)+55;
    $horas = $dias * 24;
    $minutos = $horas * 60;

    echo "La edad es $edad años<br>";
    echo "La edad en dias es $dias dias<br>";
    echo "La edad en horas es $horas horas<br>";
    echo "La edad en minutos es $minutos minutos<br>";


    ?>

</body>
</html>