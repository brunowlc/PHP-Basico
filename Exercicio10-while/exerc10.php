<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio10</title>
</head>
<body>
    <?php
        $ini = isset($_GET["inicio"]) ? $_GET["inicio"] : 0;
        $fim = isset($_GET["final"]) ? $_GET["final"] : 0;
        $inc = isset($_GET["incremente"]) ? $_GET["incremente"] : 0;

        if($ini != 0 && $fim != 0){
            while($ini <= $fim){
                echo "$ini ";
                $ini+= $inc;
            }
            while ($ini >= $fim){
                echo "$ini ";
                $ini-= $inc;
            }
        }else{
            echo "Preencha todos os campos";
        }   
    ?>
    <br>
    <a href="exercicio10.php"><input type="submit" value="Voltar"></a>
</body>
</html>