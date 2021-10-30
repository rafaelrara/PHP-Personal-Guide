<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>

    <?php
        // Método GET com formulário (Enviar informação)
        // $valor= $_GET["v"];
        // $sqr = sqrt($valor);
        // echo "A raiz quadradada de $valor é $sqr";

        $nome= $_GET["nome"];
        $sexo= $_GET["sexo"];
        $ano = $_GET["ano"];

        $nasc = 2021 - $ano;

        echo "O Nome é $nome, de sexo $sexo e idade $nasc anos";

    ?>
   <a href="basicos.php"> <button>Voltar</button></a>
    
</body>
</html>