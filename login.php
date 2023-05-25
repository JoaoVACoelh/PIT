<?php
header('Content-Type: text/html; charset=utf-8');
$resultado = "";

if (isset($_POST['enviar'])){
    $banco = new PDO("mysql:host=localhost;dbname=PIT", "root", "");
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $resultado = "";
    $sql = "SELECT * FROM usuario WHERE nome = '$nome' AND senha = '$senha'";
    $result = $banco->query($sql);

    if ($result->rowCount() > 0) {
        $resultado = "LOGIN REALIZADO";
    } else {
        $resultado = "FALHA NO LOGIN";
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
    <link rel='stylesheet' type='text/css' media='screen' href='main2.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Login de Usuário</title>
</head>

<body>
    <div id="gridprincipal">
        <div class="bloco">
            <div class="login">
                <div class="row bg-dark text-white mb-4 rounded fs-5 fw-medium d-flex flex-nowrap text-center">
                    <div class="col p-4 ps-0 pe-0 rounded rounded-end-4 " id="select"><a href="" class="p-4"
                            id="arrumadesgrama">LOGIN</a></div>
                    <div class="col p-4 ps-0 pe-0 rounded rounded-start-4 " id="select"><a href="cadastro.php"
                            class="p-4" id="arrumadesgrama">CADASTRO</a></div>
                </div>
                <form method="post" class="d-flex flex-column text-start fs-5">
                    <label for="nome">Usuário:</label>
                    <input type="text" name="nome" required><br>
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" required><br>
                    <input type="submit" name="enviar" value="Entrar" class="p-4 bg-dark text-white rounded-4 border-0 fs-5 ">
                    <button class="btn btn-link fs-6">Esqueceu sua senha?</button>
                    <div>
                        <?= $resultado ?>
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