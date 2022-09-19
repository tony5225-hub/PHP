<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Curso PHP </title>
</head>
<body>
    <div>
        <?php
        $n = isset($_GET["num"])?$_GET["num"]: 0;
        $o = isset($_GET ["oper"])?$_GET["oper"]: 1;
        switch ($o){
            case 1:
             $r = $o * 2; 
                break;
             case 2:  
             $r = $n ^ 3; 
                break;
             
             case 3:
                $r = sqrt($n); // $n ^ 0.5;
        }
        
        echo " o resultado da operacao solicitada foi <span class='foco'>$r</span "
        ?>
    </div>
</body>
</html>