<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado dos testes</h1> 
    </header> 
    <main>
        <?php 
            //var_dump($_GET) //puxa os valores dos formularios 
            $nome=$_GET["nome"] ?? "Sem nome";
            $sobrenome=$_GET["sobrenome"] ?? "Sem sobrenome";
            print "<p>Este é meu nome: $nome $sobrenome, e este é meu site"
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p> 
    </main>   
</body>
</html>