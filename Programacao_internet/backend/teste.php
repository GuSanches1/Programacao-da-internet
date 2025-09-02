<?php //teste para puxar variavel de qualquer lugar
    $sistema = "Versao do site v.10";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula01</title>
</head>
<body>  
    <h1>Aula PHP</h1>
    <?php  //primeiros testes
//php é case sensitive entao ele identifica maiusculas e minusculas, por isso as 3 variaveis sao diferentes
        $nome = "Carlos";
        $Nome = "Rafael";
        $NOME = "Roberto";

        echo "<hr>";
        echo "Oi ".$nome.", seja bem vindo ao sistema!!<br>";
        echo $nome." - ".$Nome." - ".$NOME;
//no php não é necessario colocar o tipo de variavel(int, float, boolean) ele consegue identificar
        $salario = 9.34;
        $idade = 18;
        $aprovado = true;
    ?><!--primeiros testes-->
<hr>
    <?php // condição
        $nome = "Carlos";
        $idade = "21";
        echo "Oi ".$nome.", seja bem vindo<br>";
        if($idade<18){
            echo "Você não pode prosseguir, pois é <b>menor</b> de 18 anos";
        }else{
            echo "Acesso liberado idade <b>maior</b> que 18";
             }
    ?> <!-- condição -->

<hr>

    <?php // repetição for
        for($x=1; $x<=10; $x++){
            echo "2 * ".$x ." = ".($x*2)."<br>";
        }
    ?>

<hr>

    <?php //formatando com css no php
    $cor = "#985641";
    echo "<span style ='color:$cor'>";
    echo "Formatando em PHP";
    echo "</span>";
    ?>
<hr>
    <?php //repetição com while
    $n=0;
    while($n<10){
        echo "<span style= 'color:red'>";
        echo $n+=2;
        echo "<br>";
        echo "</span>";
    }
    
    ?>
<hr>
    <?php //comando include, puxa o conteudo de outra pagina. Pode ser puxado varias vezes
    //include_once == include unico, ou seja, mesmo que voce coloque repetidamente ele so vai puxar uma vez
    include_once("primeiro.php");
    echo "<hr>";
    include_once("segundo.php");
    include_once("segundo.php");
    ?>
<hr>
    <?php // faz o mesmo, porem o require se nao achar o arquivo da erro
    require("primeiro.php");
    echo "<hr>";
    require("segundo.php");
    ?>
</body>
<hr>
<?php //teste puxando variavel
//nao importa onde a variavel foi colocada, voce consegue puxar ela de qualquer lugar
    echo $sistema;
?>
</html>