<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Arquivo php</title>
</head>
<body>
    <div>
        <?php 
            $nome = isset($_GET["nome"])?$_GET["nome"]:"Não informado";
            $ano = isset($_GET["ano"])?$_GET["ano"]:0;
            $sexo =isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";
            $idade = date("Y") - $ano;
            /*$idade = isset($_GET["ano"])?date("Y") - $ano: "Não informado"; */
            echo "$nome tem $idade anos e é $sexo<br>"
        ?>
        <a href="pegando-dados.html" target="_self" rel="prev">Voltar</a>
    </div>
    
</body>
</html>