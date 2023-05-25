<?php
header('Content-Type: text/html; charset=utf-8');
$erro = "";

if (isset($_POST['enviar'])) {
    $banco = new PDO("mysql:host=localhost;dbname=PIT", "root", "");
    $nome = $_POST['username'];
    $senha = $_POST['password'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $confirma = $_POST['password2'];
    $erro = "0";

    if ($senha == $confirma) {
        $insert = $banco->prepare("INSERT INTO usuario(cpf,nome,senha,email) VALUES(?,?,?,?)");
        $insert->execute([$cpf, $nome, $senha, $email]);
        } 
        else if ($senha != $confirma){
        $erro = "FALHA NO CADASTRO!";
        }
    }
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' media='screen' href='cadastro.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Cadastro de Usuário</title>
</head>

<body>
    <div id="gridprincipal">
        <div class="bloco">
            <div class="login">
                <div class="row bg-dark text-white mb-4 rounded fs-5 fw-medium text-center">
                    <div class="col p-4 ps-0 pe-0 rounded rounded-end-4 " id="select"><a href="login.php" class="p-4"
                            id="arrumadesgrama">LOGIN</a></div>
                    <div class="col p-4 ps-0 pe-0 rounded rounded-start-4 " id="select"><a href="" class="p-4"
                            id="arrumadesgrama">CADASTRO</a></div>
                </div>
                <form method="post" class="d-flex flex-column text-start fs-5">
                    <label for="username">Usuário:</label>
                    <input type="text" name="username" required><br>
                    <label for="password">Senha:</label>
                    <input type="password" name="password" required><br>
                    <label for="password2">Confirme a senha:</label>
                    <input type="password" name="password2" required><br>
                    <label for="email">E-mail:</label>
                    <input type="text" name="email" required><br>
                    <label for="cpf">CPF:</label>
                    <input type="text" name="cpf" required><br>
                    <input type="submit" name="enviar" value="Cadastrar" class="p-4 bg-dark text-white rounded-4 border-0 fs-5 ">
                    <div>
                        <?= $erro ?>
                    </div>
                </form>
            </div>
        </div>
        <div class="col p-0" id="imgesquerdo">
            <img src="img/photo-1636953056323-9c09fdd74fa6.jpg">
        </div>
    </div>
</body>

</html>