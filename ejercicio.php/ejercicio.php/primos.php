<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        for ($num = 2; $num <= 100; $num++) {
            $isPrime = true;
            
            for ($i = 2; $i <= $num /2; $i++) {
                if ($num % $i == 0) {
                    $isPrime = false;
                    break;
            }
            }
            if ($isPrime) {
            echo $num . " ";
            }
        }
        echo "<br />";

        $n = 5;
        for ($i = 1; $i <= $n; $i++) {
            echo str_repeat('*', $i) . "\n";
        }
        for ($i = $n - 1; $i >= 1; $i--) {
            echo str_repeat('*', $i) . "\n";}
    ?>
</body> 
</html>