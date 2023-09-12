<?php
if (isset($_POST['submit'])) 
{
    $file = $_FILES['file'];
    print_r($file);
    $fileName = $_FILES['file'] ['name'];
    $fileTmpName = $_FILES['file'] ['tmp_name'];
    $fileSize = $_FILES['file'] ['size'];
    $fileError = $_FILES['file'] ['error'];  
    $fileType = $_FILES['file'] ['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if (in_array($fileActualExt, $allowed)) 
    {
        if ($fileError === 0) 
        {
             if ($fileSize < 500000) 
             {
                 $fileNameNew = uniqid('', true).".".$fileActualExt;
                 $fileDestination = 'uploads/'.$fileNameNew;
                 move_uploaded_file($fileTmpName, $fileDestination);
                 header("Location: RecrutamentoMotorista.php?carregamentofoiumsucesso");
             } 
             else 
             {
                echo "Seu arquivo excedeu o limite de 500mb";
             }
        } 
        else 
        {
            echo "Há um erro para carregar seu arquivo!";
        } 
    } 
    else 
    {
        echo "Você não pode carregar arquivos desse tipo!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Code UPLOAD
</body>
</html>