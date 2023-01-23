<?php
    session_start();
    $_SESSION['vNome'] = "Bruno";
    $_SESSION['vTexto'] = "Texto para teste";

    //unset($_SESSION['vNome']);

    echo $_SESSION['vNome'];
    echo "<br>".$_SESSION['vTexto'];

    if( isset($_SESSION['vCanal'])){
        echo "<br>".$_SESSION['vCanal'];
    }
    else{
        echo "<br>Variável vcanal NÃO foi definida";
    }

    //session_destroy();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 19 de PHP - Sessão</title>
</head>
<body>
    <br>
    <a href="pg1.php" target="_self" rel="next">Segunda página</a>
    
    
</body>
</html>