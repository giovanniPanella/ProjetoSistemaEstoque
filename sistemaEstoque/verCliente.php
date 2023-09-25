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
    <title>Detalhes Cliente</title>
</head>

<body>
<?php
include 'menu.php';
?>
<div class="container mt-5">
        <div class= "row">
            <div class="col-md-12">
                <div class ="card-header">
                    <h4>Detalhes do Cliente
                        <a href="visualizar.php" class= "btn btn-danger float-end">Voltar</a>
                        <a href="editarCliente.php?id=<?=$cliente['id']?>" class="btn btn-warning float-end " >Editar</a>
                    </h4>
                </div>
                <div class="card-body>
                    <?php
                        
                        if(isset($_GET['id']))
                        {
                            $idCliente = mysqli_real_escape_string($con, $_GET['id']);
                            $requisicao = "SELECT * FROM cliente WHERE id='$idCliente'";
                            $query_run = mysqli_query($con,$requisicao);

                            if(mysqli_num_rows($query_run)>0)
                            {

                                $cliente= mysqli_fetch_array($query_run);
                                ?>

                                    <div class = "mb-3">
                                        <label for="">ID</label>
                                        <p class ="form-control">
                                            <?=$cliente['id'];?>
                                        </p>
                                    </div>
                                    <div class = "mb-3">
                                        <label for="">CPF</label>
                                        <p class ="form-control">
                                            <?=$cliente['cpf'];?>
                                        </p>
                                    </div>

                                    <div class = "mb-3">
                                        <label for="">Nome</label>
                                        <p class ="form-control">
                                            <?=$cliente['nome'];?>
                                        </p>
                                    </div>
                                    <div class = "mb-3">
                                        <label for="">E-mail</label>
                                        <p class ="form-control">
                                            <?=$cliente['email'];?>
                                        </p>
                                    </div>
                                    <div class = "mb-3">
                                        <label for="">Rua</label>
                                        <p class ="form-control">
                                            <?=$cliente['rua'];?>
                                        </p>
                                    </div>
                                    <div class = "mb-3">
                                        <label for="">Bairro</label>
                                        <p class ="form-control">
                                            <?=$cliente['bairro'];?>
                                        </p>
                                    </div>
                                    <div class = "mb-3">
                                        <label for="">Número</label>
                                        <p class ="form-control">
                                            <?=$cliente['numero'];?>
                                        </p>
                                    </div>
                                    <div class = "mb-3">
                                        <label for="">Cidade</label>
                                        <p class ="form-control">
                                            <?=$cliente['cidade'];?>
                                        </p>
                                    </div>

                                    <div class = "mb-3">
                                        <label for="">UF</label>
                                        <p class ="form-control">
                                            <?=$cliente['uf'];?>
                                        </p>
                                    </div>
                                <?php
                            } 
                            else
                            {
                                echo "<h4>Nenhum Cliente Cadastrado </h4>";
                            }
                        
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>