<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Transform</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div>
        <form  method="get" action="css_cores.php">
            <label for="itxt">Texto:</label>
            <input type="text" name="t" id="itxt" /><br>
            <label for="itam">Tamanho</label>
            <select name="tam" id="itan">
                <option value="8pt">8</option>
                <option value="10pt">10</option>
                <option value="14pt" selected >14</option>
                <option value="20pt">20</option>
                <option value="40pt">40</option>
            </select> <br>
            <label for="icor">Cor: </label>
            <input type="color" name="cor" id="icor"/><br>
            <input type="submit" value="Gerar"/><br>
            
        </form>
    </div>
    
</body>
</html>