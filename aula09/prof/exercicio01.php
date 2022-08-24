<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>If e Else no PHP</title>
</head>
<body>
    <div>
        <?php
            $a = isset($_GET["ano"])?$_GET["ano"]:1900;
            $i = date("Y") - $a;
            echo "Você nasceu em $a e tem $i anos <br>";

            if ($i >= 18) {
                $v = "já pode votar"; #v - votar
                $d = "já pode dirigir"; #d - dirigir
            }
            else {
                $v = "não pode votar";
                $d = "não pode dirigir";
            }

            echo "Com essa idade você $v e também $d <br>";
        ?>
        <a href="exercicio01.html" target="_self" rel="prev">Voltar</a>
    </div>
    
</body>
</html>