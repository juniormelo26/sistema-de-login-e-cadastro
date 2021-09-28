<nav class="navbar navbar-expand-lg navbar-light bg-dark">

    <a class="navbar-brand" href="inicio.php">
        <img src="https://getbootstrap.com/docs/5.1/assets/brand/bootstrap-logo.svg" alt="LOGO" width="55" class="rounded-circle" />
        <span class="d-inline-block text-warning p-2" style="max-width: 200px;">CADASTRO DE CLIENTES</span>
    </a>

    <button class="navbar-toggler text text-warning" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon "></span>
    </button>

    <div class="collapse navbar-collapse ml-3" id="conteudoNavbarSuportado">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown mr-2">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    CADASTRO
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="listar_clientes.php">Usuários</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#cadCliente">Clientes</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="listar_rotas.php">Fornecedores</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Serviços</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Produtos</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Forma de Pagamento</a>
                </div>
            </li>
            <li class="nav-item dropdown mr-2">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    LISTAR
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Usuários</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="listar_clientes.php">Clientes</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Fornecedores</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Serviços</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Produtos</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Forma de Pagamento</a>
                </div>
            </li>
            <li class="nav-item dropdown mr-2">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    RELATÓRIOS
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                    <a class="dropdown-item" href="#">Vendas por Cliente</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Vendas por Mẽs</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Vendas por Serviço</a>
                </div>
            </li>
            <li class="nav-item mr-2">
                <a class="nav-link text text-white" href="sair.php" data-bs-toggle="tooltip" data-bs-placement="botton" title="SAIR DO SISTEMA">
                        SAIR&nbsp;
                    <i class="fas fa-sign-out-alt text text-danger"></i>
                </a>
            </li>


        </ul>
    </div>
</nav>
