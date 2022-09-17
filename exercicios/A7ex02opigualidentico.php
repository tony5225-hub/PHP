<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador Relacional igual identico</title>
</head>
<body>
    <?php // mostrando essas variáveis em qualquer linguagem não vai comparar que são iguais mais no php sim.
    $a = 3; 
    $b = "3";
    /*$r = ($a == $b)? "SIM" : "Nao"; aqui mostra no navegador que é igual: http://localhost/olamundo/A7ex02opigualidentico.php:  As variáveis A e B sao iguais? Sim , mas mudando para exemplo abaixo colocando mais um igual vai dizer não, pois não são identicas pelo php. assim dois == testa as variáveis iguais e três iguais ====
    echo "As variáveis  A e B sao iguais? $r";*/ 
    $r = ($a === $b)? "SIM" : "Nao";
    echo "As variáveis  A e B sao identicas? $r";
    ?>
   
</body>
</html>