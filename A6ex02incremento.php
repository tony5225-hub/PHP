<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercico de operadores</title>
</head>
<body>
    <?php 
    $atual = $_GET ["aa"];
    echo "O Ano atual é $atual e ano anterior é " . --$atual; /*aqui esse --$atual é o pré incremento pois ele vai utilizar a variável o ano atual e depois a diminuição do ano atual e qdo representado no navegador: localhost/olamundo/A6ex02incremento.php?aa=2022 vai mostrar assim no comando de exibição na tela : O Ano atual é 2022 e ano anterior é 2021 */ 
    
    ?>
</body>
</html>