<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Criando o texto personalizado</title>
    
</head>
<body>
    <div>
        <?php 
            $titulo = $_GET["titulo"];
            $fonte = $_GET["fonte"];
            echo "<h1>$titulo</h1>"; 


            
        ?>
        <a href="conf-texto.html" target="_self" rel="prev"><br> Voltar</a>
    </div>
    
</body>
</html>