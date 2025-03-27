<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios en PHP</title>
</head>
<body>
    <h1>Números Primos del 1 al 1000</h1>
    <p>
        <?php
        for ($num = 2; $num <= 1000; $num++) {
            $esPrimo = true;
            for ($j = 2; $j * $j <= $num; $j++) {
                if ($num % $j == 0) {
                    $esPrimo = false;
                    break;
                }
            }
            if ($esPrimo) echo "$num ";
        }
        ?>
    </p>
    
    <h1>Figura en Pantalla</h1>
    <pre>
        <?php
        $n = 5;
        for ($i = 1; $i <= $n; $i++) echo str_repeat("*", $i) . "\n";
        echo str_repeat("+", $n + 1) . "\n";
        for ($i = $n; $i >= 1; $i--) echo str_repeat("*", $i) . "\n";
        ?>
    </pre>
</body>
</html>