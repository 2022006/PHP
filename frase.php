<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <?php        
            $frase="Cumple tus sueños, consigue tus metas y llega al exito";
        $cringe= 30;
        $cursi=50;
        $random=80;
        $nivel=0;

        $nivel = str_word_count($frase);
        if (str_contains($frase, "sueños")){
            $nivel = $nivel + $cringe;
        } elseif (str_contains($frase, "metas")) {
            $nivel = $nivel + $cursi;
        } elseif (str_contains($frase, "exito")) {
            $nivel = $nivel + $random;
        }

        $nivel = $nivel + random_int(0, 20);
        echo "La frase es: $frase<br>";
        echo "El nivel es: $nivel<br>";


            
            
            ?>


</body>
</html>