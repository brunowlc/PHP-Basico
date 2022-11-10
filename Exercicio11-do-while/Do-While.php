<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?php
        echo"Crescente <br>";
            $c = 1;
            do{
                echo "$c ";
                $c++;
            }while($c <=10);

            echo"<br><br>Decrescente<br>";
            $s = 10;
            do{
                echo "$s ";
                $s--;
            }while($s >=1);
        ?>
    </div>
</body>

</html>