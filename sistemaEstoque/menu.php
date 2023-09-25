<!--Inicio Menu-->
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="telainicial.php">
                <img src="iconeTAG02.png" alt="login form" class="rounded mx-auto d-block" style="max-width: 100px; border-radius: 1rem 1rem 1rem 1rem;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="telainicial.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" <?php echo $nivel1?>>
                                Clientes
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="cadastroCliente.php">Cadastrar Cliente</a></li>
                                <li><a class="dropdown-item" href="visualizar.php">Visualizar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"<?php echo $nivel2?> >
                                Compras
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Cadastrar Fornecedor</a></li>
                                <li><a class="dropdown-item" href="#">Cadastrar Recurso</a></li>
                                <li><a class="dropdown-item" href="#">Entrada de Estoque</a></li>
                                <li><a class="dropdown-item" href="#">Saída de Estoque</a></li>
                                <li><a class="dropdown-item" href="#">Pedido de Compra</a></li>
                                <li><a class="dropdown-item" href="#">Visualizar Estoque</a></li>
                                <li><a class="dropdown-item" href="#">Visualizar Pedidos de Compra</a></li>  
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"<?php echo $nivel3?> >
                                Vendas
                            </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Pedido de Venda</a></li>
                            <li><a class="dropdown-item" href="#">Visualizar Pedido de Vendas</a></li> 
                        </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"<?php echo $nivel4?> >
                                Produção
                            </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Cadastrar Produto</a></li>
                            <li><a class="dropdown-item" href="#">Cadastrar Ordem de Produção</a></li>
                            <li><a class="dropdown-item" href="#">Visualizar Ordem de Produção</a></li>
                            <li><a class="dropdown-item" href="#">Visualizar Produto</a></li>    
                        </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"<?php echo $nivel5?>>
                                Administração
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Cadastrar Usuário</a></li>
                                <li><a class="dropdown-item" href="#">Visualizar Usuário</a></li>   
                            </ul>
                            
                    </ul>
                    

                    <a class="navbar-brand" href="logout.php">Sair</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                </div>
            </div>    
        </div>
    </nav>
<!--Fim do Menu-->

<div class="navbar navbar-expand-lg navbar navbar-dark bg-dark justify-content-center"style ="color:#BDC8BF;" >
  <!-- Content here -->
  <h5><strong>Usuário Logado:</strong>   <?php echo $_SESSION['nome'];?>  <strong>Nível de Acesso: </strong> <?php echo $_SESSION['nivel']; ?></h5>
</div>