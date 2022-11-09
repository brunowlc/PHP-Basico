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
    $r = isset($_GET["regi"]) ? $_GET["regi"] : 0;
    switch ($r) {
        case 'Região Norte':
            echo "Você mora na <strong>$r</Strong>";
            break;

        case 'Região Nordeste':
            echo "Você mora na <strong>$r</Strong>";
            break;

        case 'Região Centro-Oeste':
            echo "Você mora na <strong>$r</Strong>";
            break;

        case 'Região Suldeste':
            echo "Você mora na <strong>$r</Strong>";
            break;

        case 'Região Sul':
            echo "Você mora na <strong>$r</Strong>";
            break;
    }
    ?>
    <a href="htmlexercicio.php">voltar</a>
</body>

</html>