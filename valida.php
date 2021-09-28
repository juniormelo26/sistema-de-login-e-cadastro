<?php
session_start(); //INCICIA A SESSÃO
include('config/conexao.php'); //INCLUI A CONEXÃO COM BANCO DE DADOS

if ((isset($_POST['usuario'])) && (isset($_POST['senha']))) {
    $usuario = mysqli_real_escape_string($conn, $_POST['usuario']); 
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    $senha = md5($senha);

   
    $result_usuario = "SELECT * FROM usuarios WHERE usuario = '$usuario' && senha = '$senha'";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $resultado = mysqli_fetch_assoc($resultado_usuario);
    $token = md5($usuario . $senha); // CRIA UM TOKEN SIMPLES COM MD5, USUARIO E SENHA
    $result_token = $resultado['token'];

    if (trim($result_token) === trim($token)) { // SE OS DADOS FOREM CONFIRMADOS PERMITE ACESSO AO SISTEMA

        $_SESSION['usuarioToken'] = $resultado['token'];
        $_SESSION['usuarioNome'] = $resultado['nome'];
        $_SESSION['usuarioLogin'] = $resultado['usuario'];
        $_SESSION['usuarioSenha'] = $resultado['senha'];

        header("Location: listar_clientes.php");

    } else if ($resultado) {

        $_SESSION['usuarioToken'] = $token;
        $_SESSION['usuarioNome'] = $resultado['nome'];
        $_SESSION['usuarioLogin'] = $resultado['usuario'];
        $_SESSION['usuarioSenha'] = $resultado['senha'];

        $usuario = $resultado['usuario'];
        $senha = $resultado['senha'];

        $inserir_token = ("UPDATE usuarios SET token='$token' WHERE usuario = '$usuario' && senha = '$senha'");
        $resultado_token = mysqli_query($conn, $inserir_token);

        header("Location: listar_clientes.php");

    } else {
        
        $_SESSION['loginErro'] = "Usuário ou senha Inválido";
        header("Location: login.php");
    }
  
} else {
    $_SESSION['loginErro'] = "Usuário ou senha inválido";
    header("Location: login.php");
}
