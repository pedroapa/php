<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Calculando Média de aluno</title>
</head>
<body>
    <div>
        <?php
            $nota1 = $_GET["no1"];
            $nota2 = $_GET["no2"];
            $nota3 = $_GET["no3"];
            $nota4 = $_GET["no4"];
            $media = 0;
            echo "<h1>CALCULA MÉDIA</h1>";
            echo "<p>ex03
            Mostrar a situação de um aluno, de acordo com a sua média obtida.</p>";
            echo "<p>Insira as notas na URL do site</p> ";
            $media = ($nota1+$nota2+$nota3+$nota4)/4;
            $situacao = $media >= 6.0 ? "Aprovado!" : "Reprovado.";
            echo "O aluno com as notas $nota1 | $nota2 | $nota3 | $nota4 teve a média de $media e sua situação é $situacao";
        ?>
    </div>
    
</body>
</html>