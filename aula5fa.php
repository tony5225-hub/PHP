<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funcoes aritmeticas</title>
    <style>
        h2 {
            font: 15pt Arial;
            color: darkblue;
            font-weight: bold;

        }
    </style>
</head>
<body>
    <?php
    $v1 = $_GET ["x"];
    $v2 = $_GET ["y"];
    echo "<h2>Valores recebidos: $v1 e $v2</h2";
    echo " <h2>O Valor absoluto de $v2 e 3 </h2". abs($v2);
    ?>
</body>
</html>