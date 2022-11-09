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

    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $media = ($nota1+$nota2)/2;
    echo " A media entre $nota1 e $nota2 é $media <br>";
    $sit = ($media<6) ? "REPROVADO" : "Aprovado";
    echo "O aluno foi $sit <br>";
    /* ou 
    echo "O aluno foi ".(($media<6) ? "REPROVADO" : "Aprovado)";
    */
    ?>
</body>
</html>