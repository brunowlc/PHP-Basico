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
        if($idade < 16){
            $tipodevoto = "nao vota";
        }else{
            if(($idade >=16 && $idade<18) || ($idade>65)){
                $tipodevoto = "voto opcional";
            }else{
                $tipodevoto = "voto obrigatorio";
            }
        }
        /* ou */
        /*
        if($idade < 16){
            $tipodevoto = "nao vota";
        }elseif(($idade >=16 && $idade<18) || ($idade>65)){
            $tipodevoto = "voto opcional";
        }else{
            $tipodevoto = "voto obrigatorio";
        }     
        */
        echo "Com essa idade, $tipodevoto";
    ?>
    <a href="exercicio05.php">Voltar</a>
    <strong></strong>
</body>
</html>