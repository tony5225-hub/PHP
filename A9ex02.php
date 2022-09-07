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
        echo  "Voce nasceu em $a e tera $i anos <br/>"; /*aqui inseriu a variavel $i menos o ano que nasceu para dizer quanto anos possui */
        if ($i <16){
            $tipoVoto = "não vota";
        }
        else{
         if ($i >=16 && $i < 18){
            $tipoVoto = "voto opcional";
         }
         else{
            $tipoVoto = "voto obrigatório";
         }
        }
        
        ?>
    </div>
</body>
</html>