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
        $tabuada = isset($_GET["tab"]) ? $_GET["tab"] : 1;
        $c = 1;
        echo "A tabuada de $tabuada é:<br><br>";
        do{
            $calculo = $tabuada * $c;
            echo "<strong>$tabuada"." x "."$c"." = "."$calculo</strong><br>";
            $c++;
        }while($c <=10);
    ?>
    <a href="front-tabuada-do-while.php"><input type="submit" value="voltar"></a>
</body>
</html>