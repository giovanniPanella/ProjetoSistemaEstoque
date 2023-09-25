<?php
//só usuários logados podem acessar a página
include 'protect.php';
include 'conex.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="icon" type="" href="iconeTAG02.png"/>
    <title>Visualizar Cliente</title>
</head>
<body>
<!-- Menu -->
<?php
include 'menu.php';
?>
<!-- Fim Menu -->    

            <br>
            <form class="form-inline" method="GET">
            <div class="input-group mb-3">
                <input class="form-control mr-sm-2" type="search" name="pcpf"  placeholder="Nome ou CPF" aria-label="Search">
             
                <div class="input-group-prepend">
                <button class="btn btn-primary my-2 my-sm-0"  type="submit">Pesquisar</button>
                </div>
            </div>
            </form>
 
    
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Cidade</th>
                                <th>UF</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                
                              
                                    $pesquisa = $_GET['pcpf'];
                            
                                if ($pesquisa == null){
                                    $requisicao = "SELECT * FROM cliente";
                                    $query_run = mysqli_query($con,$requisicao);
                                    if(mysqli_num_rows($query_run)> 0 ){
                                        foreach($query_run as $cliente)
                                        {
                                            ?>
                                            <tr>
                                                <td><?=$cliente['id'];?></td>
                                                <td><?=$cliente['nome'];?></td>
                                                <td><?=$cliente['email'];?></td>
                                                <td><?=$cliente['cidade'];?></td>
                                                <td><?=$cliente['uf'];?></td>
                                                <td>
                                                    <a href="verCliente.php?id=<?=$cliente['id']?>" class="btn btn-info btn-sm">Visualizar</a>
                                                    <a href="editarCliente.php?id=<?=$cliente['id']?>" class="btn btn-success btn-sm">Editar</a>
                                                    <form action="codigos.php" method="POST" class="d-inline">
                                                        <button type="submit" name="deletarCliente" value="<?=$cliente['id'];?>" class = "btn btn-danger btn-sm">Deletar</button>

                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }else{
                                        echo "<h5> Nenhum Cliente Cadastrado</h5>";
                                    }
                                }

                                if ($pesquisa!= null){
                                    $requisicao = "SELECT * FROM cliente WHERE nome LIKE '%$pesquisa%' OR cpf LIKE '%$pesquisa%' ";
                                    $query_run = mysqli_query($con,$requisicao);
                                    if(mysqli_num_rows($query_run)> 0 ){
                                        foreach($query_run as $cliente)
                                        {
                                            ?>
                                            <tr>
                                                <td><?=$cliente['id'];?></td>
                                                <td><?=$cliente['nome'];?></td>
                                                <td><?=$cliente['email'];?></td>
                                                <td><?=$cliente['cidade'];?></td>
                                                <td><?=$cliente['uf'];?></td>
                                                <td>
                                                    <a href="verCliente.php?id=<?=$cliente['id']?>" class="btn btn-info btn-sm">Visualizar</a>
                                                    <a href="editarCliente.php?id=<?=$cliente['id']?>" class="btn btn-success btn-sm">Editar</a>
                                                    <form action="codigos.php" method="POST" class="d-inline">
                                                        <button type="submit" name="deletarCliente" value="<?=$cliente['id'];?>" class = "btn btn-danger btn-sm">Deletar</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }else{
                                        echo "<h5> Nenhum Cliente Cadastrado</h5>";
                                    }
                                }

                            
        
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>






<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>