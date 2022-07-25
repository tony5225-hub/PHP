<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador Relacional situacao</title>
</head>
<body>
    <?php 
        $nota1 = $GET["n1"];
        $nota2 = $GET["n2"];
        $m = ($nota1 + $nota2)/2;
        echo "A media  entre $nota1 e $nota2 é $m <br/>";
    
    ?>
   
</body>
</html>