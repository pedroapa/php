<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
        $txt = isset($_GET["t"])?$_GET["t"]:"Texto genêrico";
        /*$txt = $_GET["t"];  
        $txt = ($txt != "")?$_GET["t"]:"Texto genêrico"; 
        pensei que tava com erro quando mandava a caixa vazia não aparecia nada, mas ha uma diferença entre alguém mandar nada e outro é a "pagina" se aberta primeiro do que o formulario*/
        $tam = isset($_GET["tam"])?$_GET["tam"]:"14pt";
        $cor = isset($_GET["cor"])?$_GET["cor"]: "#000000";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <style>
        span.texto {
            font-size: <?php echo $tam;?>;
            color: <?php echo $cor;?>;
        }
    </style>
    <title>Misturando PHP com CSS</title>
</head>
<body>
    <div>
        <?php 
            echo "<span class='texto'>$txt</span>";
        ?>
        <a href="formulario-amplo.html" target="_self" rel="prev"><br> Voltar</a>
    </div>
    
</body>
</html>