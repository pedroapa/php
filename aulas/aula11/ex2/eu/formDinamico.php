<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../_css/estilo.css">
    <title>Formulário Criado por Repetição</title>
</head>
<body>
    <div> 
        <form action="" >
            <?php 
                $conta = 1;

                while( $conta <= 5 ){
                    echo "<input type= text name= $conta placeholder= escreva> <br>";
                    $conta++;
                }
                
            ?>
        </form>
        
    </div>
    
</body>
</html>