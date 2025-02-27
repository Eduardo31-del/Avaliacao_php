<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ME MATA</title>
</head>
<body>
    <H1>ME MATA DE UMA VEZ</H1>
    <form action="" method="POST">
        <span>X</span>
        <br>
        <input type="number" name="a" id="a">
        <span>Y</span>
        <br>
        <input type="number" name="b" id="b">
        <BR></BR>
        <input type="submit" id="bot" value="confirmar">
    </form> 

        
    
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num1 = (int) $_POST["a"];
    $num2 = (int) $_POST["b"];

    $soma = $num1 + $num2;
    $subtracao = $num1 - $num2;
    $multiplicacao = $num1 * $num2;
    $divisao = $num1 != 0 ? $num1 / $num2 : "Erro divisao por zero";

    echo "<h3>Resultado</h3>";
    echo "Soma : $soma (Tipo : ". gettype($soma) . ")<br>";
    echo "subtraçao : $subtracao (Tipo : ". gettype($subtracao) . ")<br>";
    echo "multiplicaçao : $multiplicacao (Tipo : ". gettype($multiplicacao) . ")<br>";
    echo "divisao : $divisao (Tipo : ". gettype($divisao) . ")<br>";
} 

?>