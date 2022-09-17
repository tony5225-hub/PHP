<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operador Aritmetico</title>
  
</head>
<body>

  <?php
    $n1 = $_GET ["a"];
    $n2 = $_GET ["b"];
    echo "<h2>valores recebidos : $n1 e $n2 </h2>";
    /*neste exercicio se quiser demontrar pelo link ( tem digitar no final do link:http://localhost/olamundo/aula5.php?a=5&b=8 esse parametro ?a=5&b=8 para aparecer certo pois $n1 vale a =5 e $n2 vale b =8 e este exercico serve para mostrar se quiser alterar os valores no link é só alterar a e b.
     */
    $m = ($n1+$n2) / 2;
    echo "A soma vale " .($n1+$n2);
    echo "<br/>A subtracao vale " .($n1-$n2);
    echo "<br/>A Multiplicacao vale " .($n1*$n2);
    echo "<br/>A divisao vale " .($n1/$n2);
    echo "<br/>O modulo vale " .($n1%$n2);
    echo "<br/> A media vale $m";


  ?>


</body>

</html>