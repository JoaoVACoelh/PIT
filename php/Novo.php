<?php
session_start();
include('conexao.php');

$novasenha = filter_input(INPUT_GET, "codredefinicao", FILTER_SANITIZE_STRING);
var_dump($novasenha);

if (!empty($novasenha)) {

    $SELECT = "SELECT * FROM loginusuario WHERE  codigo_redefinicao = '$novasenha' LIMIT 1";
    $LINHA = $mysqli->query($SELECT);
    if($LINHA->num_rows > 0) {


        $LINHACONSULTA = $LINHA->fetch_assoc();
        $Cpf = $LINHACONSULTA['cpf'];
        $UPDATE = "UPDATE loginusuario SET codigo_redefinicao = '$novasenha' WHERE cpf = '$Cpf'";
        $novasenha = NULL;
        if ($mysqli->query($UPDATE)) {
            $_SESSION['mensagem'] = "<div class='alert alert-success' role='alert'> Codigo confirmado <br>
        <a href='RecuperarSenhaFinal'> Clique aqui para redefinir a senha! </a></div>";
            header("Location: exibicoes.php");
        } else {
            $_SESSION['mensagem'] = "<div class='alert alert-danger' role='alert'> Email não confirmado </div>";
            header("Location: exibicoes.php");
        }



    } else {
        $_SESSION['mensagem'] = "<div class='alert alert-danger' role='alert'> Erro: Endereço inválido. $novasenha </div> ";
        header("Location: exibicoes.php");
    }




}


?>