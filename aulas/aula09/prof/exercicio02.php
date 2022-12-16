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
            $a = isset($_GET["ano"])?$_GET["ano"]:1900; # a - ano
            $i = date("Y") - $a; # i - idade
            $tipoVoto = "";
            echo "Você nasceu em $a e tem $i anos <br>";
            /*  Código usando if dentro do else
            if ($i < 16) {
                $tipoVoto = "não vota";
            }
            else {
                if ( ($i >= 16 && $i < 18) || ($i > 65) ) { #modalidade opcional
                    $tipoVoto = "voto opcional";
                }
                else {
                    $tipoVoto = "voto obrigatório";
                }
            }
            */

            # Vamos fundir o if dentro do else com ele mesmo
            if ($i < 16) {
                $tipoVoto = "não vota";
            }
            elseif ( ($i >= 16 && $i < 18) || ($i > 65) ) { #modalidade opcional
                $tipoVoto = "voto opcional";
            }
            else {
                $tipoVoto = "voto obrigatório";
            }
            
            echo "Para essa idade $tipoVoto";
        ?>
        <a href="exercicio02.html" target="_self" rel="prev">Voltar</a>
    </div>
    
</body>
</html>