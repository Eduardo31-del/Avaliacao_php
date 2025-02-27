<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rodrigo Faro</title>
</head>
<body>
    <H1>Hora do Faro</H1>
    <form action="" method="POST">
        <span>Digite sua idade:</span>
        <br>
        <input type="number" name="idade" id="idade">
        <BR></BR>
        <input type="submit" id="bot" value="confirmar">
    </form> 
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] = $_POST){
        $idade = (int) $_POST["idade"];

        if($idade == 18){
            echo "UUUIIIII,CAVALOOOO";

        }
        elseif ($idade < 18) {
            echo "É O MININO DE PAPAI É HAHEHEHE";
        }
        elseif ($idade == 60 or $idade > 60){
            echo  "Seu IDOSO!!";
        }
    }

    

?>