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
    /*and (&&)
      or  (||)
      nao (!)   
    */
    $ano = $_GET["an"];
    $idade = 2022 - $ano;
    echo "Quem nasceu em $ano tem idade de $idade anos.<br>";
    $tipo = ($idade>=18 && $idade<=65)?"OBRIGATORIO":"NAO OBRIGATORIO";
    echo "Seu voto é $tipo";
    ?>
</body>
</html>