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
        $i = date ("Y") - $a;
        echo  "Voce nasceu em $a e tera $i anos <br/>"; /*aqui inseriu a variavel $i menos o anoque nasceu para dizer quanto anos possui */
        if ($i >= 18){ /* exemplo de votar e dirigir variavel $i e $d criada */
            $v = "ja pode votar";
            $d = "ja pode dirigir";
        }
        else {
            $v = "nao pode votar";
            $d = "nao pode dirigir";
        }
        echo " com essa idade vc $v e tbem  $d ";
        
        ?>
    </div>
</body>
</html>