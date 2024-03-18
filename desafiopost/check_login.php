<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Verificação de Login</title>
    </head>
    <body>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $login  = $_POST['username'];
            $senha = $_POST['password'];
            try {
                checkRegister($login, $senha);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }

        function checkRegister($name, $password) {
            if ($name === "aaa" && $password === "123456") {
                echo "<h1>Seja Bem vindo!</h1>";
            } else {
                throw new Exception("<h1>Usuario ou senha incorretos</h1>");
            }
        }
        ?>
    </body>
</html>