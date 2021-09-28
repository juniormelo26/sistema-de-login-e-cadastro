<?php
session_start();
include_once('assets/cabecalho.php');
include_once('assets/rodape.php');
include('config/conexao.php');
// include_once("config/seguranca.php");
// seguranca_adm();
$consulta = "SELECT * FROM clientes ";
$resultado = mysqli_query($conn, $consulta);
?>


<?php
if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}
if (isset($_SESSION['success'])) {
    echo $_SESSION['success'];
    unset($_SESSION['success']);
}


$busca = $_POST['palavra'];
$busca = "SELECT * FROM clientes WHERE nome LIKE '%$busca%' OR cpf LIKE '%$busca%' OR nascimento LIKE '%$busca%' OR rg LIKE '%$busca%'";
$resultado = mysqli_query($conn, $busca);
?>

<table class="table table-bordered table-hover table-sm table-responsive-xl resultado_cliente">
    <thead>
        <tr class="bg-dark text text-white">

            <th scope="col">CÓD</th>
            <th scope="col">NOME</th>
            <th scope="col">TELEFONE</th>
            <th scope="col">ENDEREÇO</th>
            <th scope="col">CPF</th>
            <th scope="col">RG</th>
            <th scope="col">NASCIMENTO</th>
            <th scope="col">RESPONSÁVEL</th>
            <th scope="col" class="text text-center" colspan="3">AÇÕES</th>
        </tr>
    </thead>
    <?php
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $id_cliente = $linha['id_cliente'];
        $nome = ucwords(strtolower($linha['nome']));
        $telefone = $linha['telefone'];
        $responsavel = $linha['criado_por'];
        $situacao = $linha['situacao'];
        $alterado_por = $linha['alterado_por'];
        $cpf = $linha['cpf'];
        $rg = $linha['rg'];


        // CONVERTENDO DATA/HORA PARA PADRAO PORTUGUES-BR
        $ultima_alteracao = $linha['ultima_alteracao'];
        $ultima_alteracao = date('d/m/Y H:i:s',  strtotime($ultima_alteracao));

        // CONVERTENDO DATA/HORA PARA PADRAO PORTUGUES-BR
        $data_cadastro = $linha['data_cadastro'];
        $data_cadastro = date('d/m/Y H:i:s',  strtotime($data_cadastro));

        // CONVERTENDO NASCIMENTO PARA PADRAO PORTUGUES-BR
        $nascimento = $linha['nascimento'];
        $nascimento = date('d/m/Y',  strtotime($nascimento));

        $rua = $linha['rua'];
        $bairro = $linha['bairro'];
        $rua = $linha['rua'];
        $numero = $linha['numero'];
        $cidade = $linha['cidade'];
        $uf = $linha['uf'];

        $endereco = $rua . ", " . $numero . " - " . $bairro . "-" . $cidade . "/" . $uf;
    ?>
        <tbody>
            <tr>
                <td><?php echo $id_cliente ?></td>
                <td><?php echo ucwords(strtolower($nome)); ?></td>
                <td><?php echo $linha['telefone']; ?></td>
                <td><?php echo $endereco; ?></td>
                <td><?php echo $cpf; ?></td>
                <td><?php echo $rg; ?></td>
                <td><?php echo $nascimento ?></td>
                <td><?php echo $responsavel ?></td>
                <td class="text text-center">

                    <a href="#" data-toggle="modal" 
                    data-backdrop="static" 
                    data-keyboard="false" 
                    data-target="#visulaizarCliente" 
                    data-whatever="<?php echo $linha['id_cliente']; ?>" 
                    data-whatevernome="<?php echo ucwords(strtolower($linha['nome'])); ?>" 
                    data-whateveremail="<?php echo $linha['email']; ?>" 
                    data-whatevertelefone="<?php echo $linha['telefone']; ?>" 
                    data-whateverrua="<?php echo ucwords(strtolower($linha['rua'])); ?>" 
                    data-whatevernumero="<?php echo $linha['numero']; ?>" 
                    data-whateverbairro="<?php echo $linha['bairro']; ?>" 
                    data-whatevercomplemento="<?php echo $linha['complemento']; ?>" 
                    data-whatevercep="<?php echo $linha['cep']; ?>" 
                    data-whatevercidade="<?php echo $linha['cidade']; ?>" 
                    data-whateveruf="<?php echo $linha['uf']; ?>" 
                    data-whatevertelefone="<?php echo $linha['telefone']; ?>" 
                    data-whatevercelular="<?php echo $linha['celular']; ?>" 
                    data-whatevercpf="<?php echo $linha['cpf']; ?>" 
                    data-whateverrg="<?php echo $linha['rg']; ?>" 
                    data-whatevernascimento="<?php echo $nascimento; ?>" 
                    data-whateveroperador="<?php echo $linha['criado_por']; ?>" 
                    data-whateversituacao="<?php echo $situacao; ?>" 
                    data-whateverdata-cadastro="<?php echo $data_cadastro; ?>"
                    data-whateveralterado_por="<?php echo $alterado_por; ?>"
                    data-whateverultima_alteracao="<?php echo $ultima_alteracao; ?>">

                        <i class="far fa-eye text text-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Visualizar"></i>
                    </a>
                </td>

                <td class="text text-center">
                    <a href="#" data-toggle="modal" 
                    data-backdrop="static" 
                    data-keyboard="false" 
                    data-target="#editarCliente" 
                    data-whatever="<?php echo $linha['id_cliente']; ?>" 
                    data-whatevernome="<?php echo ucwords(strtolower($linha['nome'])); ?>" 
                    data-whateveremail="<?php echo $linha['email']; ?>" 
                    data-whatevertelefone="<?php echo $linha['telefone']; ?>" 
                    data-whateverrua="<?php echo ucwords(strtolower($linha['rua'])); ?>" 
                    data-whatevernumero="<?php echo $linha['numero']; ?>" 
                    data-whateverbairro="<?php echo $linha['bairro']; ?>" 
                    data-whatevercomplemento="<?php echo $linha['complemento']; ?>" 
                    data-whatevercep="<?php echo $linha['cep']; ?>" 
                    data-whatevercidade="<?php echo $linha['cidade']; ?>" 
                    data-whateveruf="<?php echo $linha['uf']; ?>" 
                    data-whatevertelefone="<?php echo $linha['telefone']; ?>" 
                    data-whatevercelular="<?php echo $linha['celular']; ?>" 
                    data-whatevercpf="<?php echo $linha['cpf']; ?>" 
                    data-whateverrg="<?php echo $linha['rg']; ?>" 
                    data-whatevernascimento="<?php echo $nascimento; ?>" 
                    data-whateveroperador="<?php echo $linha['criado_por']; ?>" 
                    data-whateversituacao="<?php echo $linha['situacao']; ?>" 
                    data-whateverdata-cadastro="<?php echo $data_cadastro ?>"
                    data-whateveralterado_por="<?php echo $alterado_por; ?>"
                    data-whateverultima_alteracao="<?php echo $ultima_alteracao; ?>">

                        <i class="far fa-edit text text-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar"></i></a>
                </td>
                <td class="text text-center">
                    <a href="processa_excluir_clientes.php?id_cliente=<?php echo $linha['id_cliente']; ?>" onClick="return confirm('Deseja realmente deletar o cliente? <?php echo $linha['cliente']; ?>')">
                        <i class="far fa-trash-alt text text-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Excluir"></i></a>
                </td>

            </tr>
        </tbody>
    <?php } ?>
</table>


