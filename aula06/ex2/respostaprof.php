<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Curso de php cursoemvideo.com</title>
</head>
<body>
    <div>
        <h1>Mostrar o ano anterior</h1>
        <?php
            /* Esse exercicio pretende
            demonstrar o uso de operadores
             de incremento e decremento */
            $atual = $_GET["aa"];
            echo "O ano atual é $atual e o ano anterior é ". --$atual;
            //echo "<br>O ano anterior atualizado $atual " fiz testando

            #não sabia que jogo da velha dava para comentar
        ?>
    </div>
    
</body>
</html>