<?php
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' media='screen' href='loginm.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Login de Usuário</title>
</head>

<body>
    <div id="gridprincipal">
        <div class="bloco">
            <div class="login">
                <div class="row bg-dark text-white mb-4 rounded fs-5 fw-medium d-flex flex-nowrap">
                    <div class="col p-4 ps-0 pe-0 rounded rounded-end-4 " id="select"><a href="" class="p-4"
                            id="arrumadesgrama">LOGIN</a></div>
                    <div class="col p-4 ps-0 pe-0 rounded rounded-start-4 " id="select"><a href="cadastromotorista.php"
                            class="p-4" id="arrumadesgrama">CADASTRO</a></div>
                </div>
                <form method="post" action="login.php" class="d-flex flex-column text-start fs-5">
                    <label for="cpf">CPF:</label>
                    <input type="text" name="username" required><br>
                    <label for="cpf">E-mail:</label>
                    <input type="text" name="email" required><br>
                    <label for="password">Senha:</label>
                    <input type="password" name="password" required><br>
                    <input type="submit" value="Entrar" class="p-4 bg-dark text-white rounded-4 border-0 fs-5 ">
                    <button class="btn btn-link fs-6">Esqueceu sua senha?</button>
                </form>
            </div>
        </div>
        <div class="col p-0" id="imgesquerdo">
            <img src="img/photo-1636953056323-9c09fdd74fa6.jpg">
        </div>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Conectar ao banco de dados
        $servername = "localhost";
        $username_db = "seu_usuario";
        $password_db = "sua_senha";
        $dbname = "nome_do_banco_de_dados";

        $conn = new mysqli($servername, $username_db, $password_db, $dbname);

        // Verificar a conexão
        if ($conn->connect_error) {
            die("Falha na conexão com o banco de dados: " . $conn->connect_error);
        }

        // Verificar as credenciais do usuário
        $sql = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<p>Login realizado com sucesso!</p>";
        } else {
            echo "<p>Nome de usuário ou senha inválidos.</p>";
        }

        $conn->close();
    }
    ?>
</body>

</html>