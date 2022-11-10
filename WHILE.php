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
    echo "Crescente <br>";
    $c = 1;
    while ($c <=10){
        echo $c."<br>";
        $c++; // ou $c+= 1; ou $c= $c+1;
    }
    echo"<br>";
    echo "Decrescente <br>";
    $r = 10;
    while ($r >=1){
        echo $r."<br>";
        $r--; // ou $c-= 1; ou $c= $c-1;
    }


    ?>
</body>
</html>