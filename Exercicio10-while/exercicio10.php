<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio10</title>
</head>
<body>
    <div>
        <form action="exerc10.php" method="get">
            <label for="ini">Inicio: </label>
            <input type="number" name="inicio" id="ini" min="1" max="100" checked><br>
            <label for="fim">Final: </label>
            <input type="number" name="final" id="fim" min="1" max="100" checked><br>
            <label for="incre">Incrementar: </label>
            <select name="incremente" id="incre">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select><br>
            <input type="submit" class="botao" value="Iniciar">
        </form>
    </div>
</body>
</html>