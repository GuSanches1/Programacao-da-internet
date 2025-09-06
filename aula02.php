<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2 Função</title>
    <?php include("aula02_funcao.php")?>
    <link rel="stylesheet" href="aula02_style.css">
</head>
<body>
    <h1>Aula sobre função</h1>
    <hr>
    <p>
        <?php
            echo saudacao();
        ?>    
        <hr>
    </p>
    <p>
        A resposta da adição de 10 + 20 = <?php echo calculadora("a",10,20);?>
    </p>
    <p>
        A resposta da subtração de 10 - 20 = <?php echo calculadora("s",10,20);?>
    </p>
<hr>
<?php
    $nome = "KaUan TorreS MarQues";
    echo "<p> Nome Original: {$nome}</p>";
    echo "Nome Maiusculo: ", converterMaiusculo($nome);
    echo "<br><br>";
    echo "Nome Minusculo: ", converterMinusuculo($nome);
    echo "<hr class='corLinha'>";
    echo "<div class='janelaCopy'>";
    echo imprimirRodade();  
    echo "</div>";
    echo "<hr class='corLinha'>";
?>
</body>
</html>