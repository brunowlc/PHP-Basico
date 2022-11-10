<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
</head>
<body>
    <div>
        <form action="exerc09.php" method="get">
            <?php
            $c = 1;
            while ($c <=5){
            echo "valor $c: <input type='number' name='v$c' min='0' max='100' value='0'><br>";
            $c++;
            }
            ?>
            <input type="submit" value="Enviar" class="botao">
        </form>
    </div>
</body>
</html>