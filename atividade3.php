<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I AM</title>
</head>
<body>
    <h1>Eu sinto</h1>
    <?php
    for ($num = 1; $num <= 100; $num++){
        if ($num % 3 == 0 && $num %5 == 0){
            echo "AB<br>";
        }elseif($num % 3 == 0){
            echo "A<br>";
        }elseif($num % 5 == 0){
            echo "B<br>";
        }else{
            echo $num . "<br>";
        }
    }
    ?>
</body>
</html>