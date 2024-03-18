<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Bem-vindo</title>
</head>

<body> <?php if (isset($_GET['nome'])) {
            $nome = $_GET['nome'];
            echo "<h1>Bem-vindo, $nome!</h1>";
        } else {
            echo "<h1>Por favor, digite seu nome.</h1>";
        } ?> </body>

</html>