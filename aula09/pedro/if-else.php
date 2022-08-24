<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Usando estrutura de Decisão if/else</title>
</head>
<body>
    <div>
        <?php
            $ano_nascimento = isset($_GET["ano"])?$_GET["ano"]:0;
            $idade = date("Y") - $ano_nascimento;
            $votar = false;
            $dirigir = false;

            if ($idade >= 18) {
                $votar = true;
                $dirigir = true;
                
            }
            else {
                $votar = false;
                $dirigir = false;
            }
            
            echo "Você nasceu em $ano_nascimento, tem $idade anos e sua situação sobre votar: " . (($votar == true)?"obrigatório": "não é obrigado") . " e sobre dirigir é " . (($dirigir == true)?"permitido":"não permitido");
        ?>
        <a href="estru-condiconal.html" target="_self" rel="prev"><br> Voltar</a>
    </div>
    
</body>
</html>