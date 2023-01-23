<?php
    session_start();

    echo "<h3>Terceira página</h3>";
    echo $_SESSION['vNome'];
    echo "<br>".$_SESSION['vTexto'];
    echo "<br>".$_SESSION['vCanal'];

    

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
    <br> <br>
    <a href="aula19.php" target="_self" rel="prev">Voltar Aula</a>
    <a href="pg1.php" target="_self" rel="prev">Segunda página</a>
    
</body>
</html>