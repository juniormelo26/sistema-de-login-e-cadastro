<?php
include('config/conexao.php'); //INCLUI A CONEXÃO COM BANCO DE DADOS
session_start();
$token = $_SESSION['usuarioToken'];
$inserir_token = ("UPDATE usuarios SET token='1' WHERE token='$token'");
$resultado_token = mysqli_query($conn, $inserir_token);

unset(
	$_SESSION['usuarioToken'],
	$_SESSION['usuarioLogin'],
	$_SESSION['usuarioId'],
	$_SESSION['usuarioUsuario'],
	$_SESSION['usuarioNome'],
	$_SESSION['usuarioEmail'],
	$_SESSION['usuarioSenha']
	);
$_SESSION['logindeslogado'] = "Deslogado com sucesso";

header("Location: login.php");
?>
