<!DOCTYPE html>
<html lang="en">>
<head>
    <title>Cadastro de Caminhões</title>
</head>
<body>
    <?php

    // conexão com o Banco de Dados usando PDO
    $con = new PDO("mysql:host=localhost;dbname=pit", "root", "");  

    // Verifique se o formulário foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $modelo = $_POST['modelo'];
        $placa = $_POST['placa'];
        $foto_caminhao = $_FILES['foto_caminhao']['tmp_name'];

        // Verifique se a foto foi carregada com sucesso
        if (is_uploaded_file($foto_caminhao)) {
            $foto_caminhao = file_get_contents($foto_caminhao);
            $foto_caminhao = base64_encode($foto_caminhao);

            // Inserir os dados na tabela
            $sql = "INSERT INTO Caminhoes (modelo, placa, Foto_caminhao) VALUES (?, ?, ?)";
            $stmt = $con->prepare($sql);
            
            // Ajuste o tipo de dados dos parâmetros
            $stmt->bindParam(1, $modelo, PDO::PARAM_STR);
            $stmt->bindParam(2, $placa, PDO::PARAM_STR);
            $stmt->bindParam(3, $foto_caminhao, PDO::PARAM_LOB);
            
            if ($stmt->execute()) {
                echo "Registro inserido com sucesso!";
            } else {
                echo "Erro ao inserir o registro: " . $stmt->errorInfo()[2];
            }

            $stmt->closeCursor();
        } else {
            echo "Erro ao carregar a foto do caminhão.";
        }
    }
    ?>

    <h1>Cadastro de Caminhões</h1>
    <form method="POST" enctype="multipart/form-data">
        <label for="modelo">Modelo:</label>
        

        <select  name="modelo" required> 

        <option value="aa"> aa</option>
        <option value="bb"> bb</option>
        <option value="cc"> cc</option>

        </select>
        <br>
        <label for="placa">Placa:</label>
        <input type="text" name="placa" required>
        <br>
        <label for="foto_caminhao">Foto do Caminhão:</label>
        <input type="file" name="foto_caminhao" accept="image/*" required>
        <br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
