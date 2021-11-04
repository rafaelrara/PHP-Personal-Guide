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

        // Pegando dados (get) de basicos.php
        // isset evita erro caso a página seja aberta sem valores. Ele tem a função de dar opções ao navegador
        $nome= isset($_GET["nome"]) ?$_GET["nome"]:"Nome não digitado";
        $sexo= isset($_GET["sexo"]) ?$_GET["sexo"]:"Sexo não informado";
        $ano = isset($_GET["ano"]) ?$_GET["ano"]:1900;
        $nota_1 = isset($_GET["nota_1"]) ?$_GET["nota_1"]:0;
        $nota_2 = isset($_GET["nota_2"]) ?$_GET["nota_2"]:0;

        $nasc = 2021 - $ano;

        echo "O Nome é $nome, de sexo $sexo e idade $nasc anos <br>";

        // Estrutura condicional(if else)
        if ($nasc >= 18){
            echo "$nome pode votar e dirigir";
        }
        else{
            echo "$nome ñ pode votar nem dirigir";
        }

        echo "<br>";

        $media = ($nota_1 + $nota_2) / 2;

        if ($media < 5){
            echo "Você não passou na prova";
        }
        elseif ($media >= 5 && $media < 7){
            echo "Você ficou de recuperção";
        }
        elseif ($media >= 7){
            echo "Parabéns você passou na prova!!";
        }

        // Estrutura condicional(switch)
        switch($media){
            case "10":
                echo "<br> Parabéns NOTA MÁXIMA";
                break;
            case "0":
                echo "<br> Vc precisa estudar mais!";
                break;
            }

    ?>
   <a href="basicos.php"> <button>Voltar</button></a>
    
</body>
</html>