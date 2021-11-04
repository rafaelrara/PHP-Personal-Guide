<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    
    
    <div>
    
    <form action="basicos_dados.php" method="get">
        <!-- Form para calculo de raíz -->
        <!-- Raíz de: <input type="text" name="v"/>
        <input type="submit" value="Calcular"/> -->

        <br>

        Nome: <input type="text" name="nome"/><br>
        Ano de Nascimento: <input type="number" name="ano"/><br>
        Sexo: <input type="text" name="sexo"/><br>
        Nota 1: <input type="number" name="nota_1"/><br>
        Nota 2: <input type="number" name="nota_2"/><br>
        <input type="submit" value="Enviar"/>

    </form>
    
    <h1>Testando PHP</h1>
    <?php
        // Função imprimir
        echo "<h2> Ola, Mundo!</h2>";
        print "Hello, World!<br>";

        // Declaração de variável
        $n = 4;
        $no = "Rafael";
        echo $no;

        // Conversão
        $n = (float)30;
        print $n;

        // Concatenação
        echo "<br>" . $no . " tem " . $n . " anos de idade";
        // Outra possibilidade
        echo "<br> $no tem $n anos de idade";
        echo '<br> $no tem $n anos de idade'; //Com aspas simples, ele nao le o conteudo das variaveis

        // Operadores Aritméticos
        echo "<br>";
        $n1 = 3;
        $n2 = 2;
        $s = $n1 + $n2;
        echo $s; //Adição +, Subtração -, Multiplicação *, divisão /, Módulo %

        // Pegar(get) Informações do URL - Ex do final de URL: ?a=3&b=2
        // $a = $_GET["a"];
        // $b = $_GET["b"];
        // echo "<br> 'A' vale $a e 'B' vale $b";

        // Método GET com formulário (Enviar informação) no arquivo dados.php

        // Inserindo datas
        date_default_timezone_set('America/Sao_Paulo');
        echo "<br>"."Hoje é dia: ". date('d/m/Y');

        // Inserindo Horário
        echo "<br>"."Hora atual: ". date('H:i');

        // Estrutura condicional esta descrito em basicos_dados.php

    ?>
    </div>
    
</body>
</html>