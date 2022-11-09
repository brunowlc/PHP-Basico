<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*operadores relacionais:
    maior: $a>$b
    menor: $a<$b
    maior ou igual: $a>=$b
    menor ou igual: $a<=$b
    diferente: $a<>$b ou $a!=$b
    igual: $a==$b
    identico: $a===$b
    */

    /*Operador unario:
    expressao ? verdadeiro: falso
    $a>$b ? $a : $b
    se $a for maior que $b ?(entao) é verdadeiro :(senao) é falso

    $maior=$a>$b ? $a : $b
    se $a for maior que $b ? entao $maior recebe valor de $a : senao $maior 
    recebe o valor de $b. 

    $r=$a>$b ? $a+$b : $a-$b
    se $a for maior que $b ?(entao) $r vai receber o valor da soma entre
    $a e $b :(senao) $r vai receber a subtração entre $a e $b.

    $sit=$m<7 ? "recuperação" : "aprovado"
    */
    echo "* Soma e multiplicação *<br>";
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $tipo = $_GET["op"];
    echo "Os valores passados foram $n1 e $n2 <br>";
    $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
    echo "O resultado é: $r <br>";
    echo "--------------------------------------------------------<br>";

    echo "* Igualdade *<br>";
    $a = 3;
    $b = "3";
    $e = ($a == $b) ? "SIM" : "NAO";
    echo "As variaveis Sa = $a e Sb = $b sao iguais?<br> $e <br>";
    echo "--------------------------------------------------------<br>";
    
    echo "* Identico *<br>";
    $a = 3;
    $b = "3";
    $e = ($a === $b) ? "SIM" : "NAO";
    echo "As variaveis Sa = $a e Sb = $b sao identicas?<br> $e";

    ?>
</body>
</html>