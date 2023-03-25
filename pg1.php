<?php
    #provavel first class php
    $_nome="João Antonio";
    $Nome="Alfredo Maciel";
    $valor=123456;
    $nota=7.5;
    $bebida="água";


    #echo $nota + "" + $_nome;

    echo "O nome do usuário é: $_nome<br>";
    echo "O nome de seu dependente é: $Nome<br>";
    echo "valor: $valor<br>";
    echo "A nota é: $nota <br>";
    echo "Bebida: $bebida <br>";

    #A aspas simples no php, não reconhece variavel. Vira somente texto.

    //o comando var_dump(), é um comando para teste.
    #ele mostra o qual é tipo da variável e o que consta nela. Que nem o comando "TypeOf" em algumas outras linguagens de programação.
    #exemplos abaixo.
    #var_dump($nota);
    var_dump($bebida); #o esperto vardump tmb conta caracteres
    


    echo "<br> <br>";
    $valor1=19;
    $valor2=1.5;
    $result= $valor1 + $valor2;
    echo "<br>";
    echo "Resultado da soma: $result <br><br>";

 ?>
 <a href="index.php"> Home </a>