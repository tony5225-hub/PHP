<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variavel referenciada</title>
</head>
<body>
    <?php 
       
     $x = "abc";
     $$x = "def";           
    
    echo "O conteudo da váriavel X é $x";
    echo "<br/>A variavel ABC criada recebeu o valor $abc "; // essa variável $abc vai virar def conforme a representação no site devido a inclusão do cifrão na váriavel $x ($$x = def) OBS: ( cifrôes antes de váriaveis vão criar váriaveis de váriaveis ou váriaveis variantes)
    
    ?>
   
</body>
</html>
