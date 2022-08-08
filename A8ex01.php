!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>valor</title>
</head>
<body>
    <?php 
      $valor = $_GET["v"];
      $rq = sqrt($valor);
      echo " A raiz de  $valor é igual a " . number_format($rq,2); /* number format para deixar a raiz quando aparece na url com 2 casas decimais */
    ?>
    <!--<a href="A8ex01.html">Voltar</a> este comando é para exemplo não utilizxar no php-->

  </body>
</html>