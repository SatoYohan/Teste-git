<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo"); //alterar formato padrão de fuso
        echo "Hoje é dia:" .date("d/M/Y"); //formato data (d), mês (M) e ano (Y)
        echo " e a hora atual é:" .date("G:i:s");
    ?>
</body>
</html>