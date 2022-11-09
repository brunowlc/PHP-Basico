<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso do IF e ELSE</title>
</head>
<body>
    <?php
        $a = isset ($_GET["ano"])?$_GET["ano"]:"Ano nao informado";
        $idade = date("Y") - $a;
        echo "Você nasceu em $a e tem $idade anos <br>";
        if($idade >= 18){
            $v = "já pode votar";
            $d = "já pode dirigir";
        }
        else{
            $v = "não pode votar";
            $d = "não pode dirigir";
        }
        echo "Com $idade anos voce, $v e tambem $d";
    ?>
    <a href="exercicio04.php">Voltar</a>
</body>
</html>