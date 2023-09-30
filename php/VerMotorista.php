<!DOCTYPE html>
<html>
<head>
    <title>Motoristas Disponíveis</title>
</head>
<body>
    
    <h1>Motoristas Disponíveis</h1>
    <form method="POST" action="">
        <label for="regiao">Selecione a região:</label>
        <select name="regiao" id="regiao">
            <option value="A">Região A</option>
            <option value="B">Região B</option>
            <option value="Sabara">Região de Sabara</option>
            <option value="Betim">Região de Betim</option>           
        </select>
        <input type="submit" name="buscar" value="Buscar Motoristas">
    </form>

    <?php
    
    $conexao = new mysqli("localhost", "root", "", "pit");

    
    if ($conexao->connect_error) {
        die("SEM CONEXÃO COM O BANCO: " . $conexao->connect_error);
    }

    if (isset($_POST['buscar'])) {
        $regiao = $_POST['regiao'];

        
        if (!empty($regiao)) {
            $sql = "SELECT * FROM cadastromotorista WHERE motorista_regiao = ?";

            try {
            
                $stmt = $conexao->prepare($sql);
                $stmt->bind_param("s", $regiao);
                $stmt->execute();

                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    echo "<h3> Motoristas disponíveis na região $regiao:</h3>";
                    echo "<ul>";
                    while ($row = $result->fetch_assoc()) {
                        echo $row['usuario'] ;
                    }
                    echo "</ul>";
                } else {
                    echo "<p> Nenhum motorista disponível na região selecionada. </p>";
                }

                
                $stmt->close();
            } catch (Exception $e) {
                echo "Erro na consulta: " . $e->getMessage();
            }
        } else {
            echo "<p>Selecione uma região válida.</p>";
        }
    }

    
    $conexao->close();
    ?>
</body>
</html>
