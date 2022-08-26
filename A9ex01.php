<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
        $a = isset($_GET["ano"])?$_GET["ano"]: 1900;
        echo  "Voce nasceu em $ano";
        ?>
    </div>
</body>
</html>