<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotos de Caminhões Disponíveis</title>
    <title>Lista de Caminhões</title>
</head>
<body>
<h1>Fotos de Caminhões Disponíveis</h1>
    <?php
    // conexão com o Banco de Dados usando PDO
    $con = new PDO("mysql:host=localhost;dbname=pit", "root", "");

    // Selecionar todos os registros da tabela Caminhoes
    $sql = "SELECT id, modelo, placa, Foto_caminhao FROM Caminhoes";
    $result = $con->query($sql);

    if ($result->rowCount() > 0) {
        echo "<h1>Lista de Caminhões</h1>";
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Modelo</th><th>Placa</th><th>Foto</th></tr>";
        
        foreach ($result as $row) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['modelo'] . "</td>";
            echo "<td>" . $row['placa'] . "</td>";
            echo "<td><img src='data:image/jpeg;base64," . $row['Foto_caminhao'] . "' width='100'></td>";
            echo "</tr>";
        }
        
        echo "</table>";
    } else {
        echo "Não há registros de caminhões.";
    }

    // Fechar a conexão com o banco de dados
    $con = null;
    ?>
</body>
</html>
