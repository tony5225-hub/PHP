<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador Relacional</title>
</head>
<body>
    <?php 
    $n1 = $_GET ["a"];
    $n2 = $_GET ["b"];
    $tipo = $_GET["op"];
       
   echo "os valores passados foram $n1 e $n2 <br/>";
   $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2; // aqui interrogação "?" le-se como "SE" e dois pontos ":" como "ENTÃO".
   echo "o resultado será $r";
   
    ?>
   
</body>
</html>