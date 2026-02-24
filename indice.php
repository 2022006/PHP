<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
        $altura=1.73;
        $peso= 53;
        $imc=0;

        $imc = round($peso / ($altura * $altura), 2);
        echo "El índice de masa corporal es $imc<br>";


        if ($imc < 18.5) {
            echo "Bajo peso";
        } elseif ($imc >= 18.5 && $imc < 25) {
            echo "Peso normal";
        } elseif ($imc >= 25 && $imc < 30) {
            echo "Sobrepeso";
        } else {
            echo "Obesidad";
        }

        ?>

</body>
</html>