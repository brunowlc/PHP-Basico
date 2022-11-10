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
        $v = isset($_GET["valor"]) ? $_GET["valor"] : 0;
        echo "<h1>Calculando o valor fatorial de $v</h1>";

        $c = $v;
        $fat = 1;
        do{
            $fat = $fat * $c;
            $c--;
        }while ($c>=1);
        echo "<h2>$v ! = $fat</h2>"
    ?>
    <a href="Do-While-Fatorial.php"><input type="submit" value="voltar"></a>
</body>
</html>