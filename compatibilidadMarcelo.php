<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
$nombre1 = "Mathias";
$nombre2 = "Paul";
$alias = "";
$porcentaje = 0;

$porcentaje = strlen($nombre1) + strlen($nombre2);

if (str_contains($nombre1, "a") && str_contains($nombre2, "a")) {
$porcentaje = $porcentaje + 30;
} elseif (str_contains($nombre1, "a")) {
$porcentaje = $porcentaje + 15;
} elseif (str_contains($nombre2, "a")) {
$porcentaje = $porcentaje + 15;
}

$porcentaje = $porcentaje+random_int(0,30);

$alias = substr($nombre1, 0, 2) . substr($nombre2, 0, 2);


echo "$nombre1<br>";
echo "$nombre2<br>";

echo "El porcentje de compatibilidad es, $porcentaje<br>";
echo "El alias es , $alias<br>";

?>


</body>
</html>