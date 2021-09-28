<?php
session_start();

include('config/conexao.php');
//include_once("config/seguranca.php");
//seguranca_adm();

$id_cliente = mysqli_real_escape_string($conn, $_POST['id']);
$nome = mysqli_real_escape_string($conn, ucwords(strtolower($_POST['nome'])));
$email = mysqli_real_escape_string($conn, strtolower($_POST['email']));
$telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
$celular = mysqli_real_escape_string($conn, $_POST['celular']);
$cep = mysqli_real_escape_string($conn, $_POST['cep']);
$rua = mysqli_real_escape_string($conn, $_POST['rua']);
$numero = mysqli_real_escape_string($conn, $_POST['numero']);
$bairro = mysqli_real_escape_string($conn, $_POST['bairro']);
$cidade = mysqli_real_escape_string($conn, $_POST['cidade']);
$uf = mysqli_real_escape_string($conn, $_POST['uf']);
$cpf = mysqli_real_escape_string($conn, $_POST['cpf']);
$rg = mysqli_real_escape_string($conn, $_POST['rg']);
$situacao = mysqli_real_escape_string($conn, $_POST['situacao']);
$complemento = mysqli_real_escape_string($conn, $_POST['complemento']);
$alterado_por = $_SESSION['usuarioNome'];

$ultima_alteracao = date('Y-m-d H:i:s');

$nascimento = mysqli_real_escape_string($conn, $_POST['nascimento']);
$nascimento = str_replace("/", "-", $nascimento);
$nascimento = date('Y-m-d', strtotime($nascimento));

$altera_cliente = "UPDATE clientes SET nome='$nome', email='$email', telefone='$telefone', celular='$celular', 
cep='$cep', rua='$rua', numero='$numero', bairro='$bairro', cidade='$cidade', uf='$uf', cpf='$cpf', rg='$rg', 
nascimento='$nascimento', alterado_por='$alterado_por', ultima_alteracao='$ultima_alteracao', situacao='$situacao', complemento='$complemento' WHERE id_cliente='$id_cliente'";
$resposta = mysqli_query($conn, $altera_cliente);

if($resposta){
    //$_SESSION['success'] = "<div class='danger' role='alert' id='sumirDiv'><center>Área Restrita - Realize Login</center></div>";
    $_SESSION['success'] = "<div class='alert alert-success alert-dismissible fade show text text-center mb-0' role='alert'>
                                
                                <strong> CLIENTE EDITADO COM SUCESSO &nbsp; <i class='far fa-smile-wink fa-2x'></i> </strong> 
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                                </button>
                                
                        </div>";
    header('Location: listar_clientes.php');
}else{
    $_SESSION['error'] = "<div class='alert alert-danger alert-dismissible fade show text text-center mb-0' role='alert'>
                                
                                <strong> NÃO FOI POSSÍVEL EDITAR O CLIENTE &nbsp; <i class='fas fa-grin-squint-tears fa-2x'></i> </strong> 
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                                </button>
                                
                            </div>";
     header('Location: listar_clientes.php');
    
}

?>