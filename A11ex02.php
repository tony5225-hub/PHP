<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP repetição</title>
</head>
<body>
    <div>
    <form method="get" action="02-parte2.php">
    <?php
         $c = 1;
         while ($c <=5) {
            echo "Valor $c: <input type ='number' name='v$c' max= '100' min= '0'/><br/>";
            
            $n++;
         }
        ?>
             
            <input type = "submit" value = "Enviar" class="botao"/> 
        </form>
        
    </div>
</body>
</html>