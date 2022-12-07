<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../_css/estilo.css">
    <title>Curso do PHP - CursoEmVideo.com</title>
</head>
<body>
    <div>
        <form action="02-parte2.php">
            <?php
                $c = 1;

                while( $c <= 5 ){
                    echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='$c'> <br>";
                    $c++;
                }
            ?>
            <input type="submit" value="Enviar">
        </form>
    </div>
    
</body>
</html>