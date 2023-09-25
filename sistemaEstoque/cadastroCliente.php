<?php
include 'protect.php';

if (  ($_SESSION['nivel'] ==1) OR  ($_SESSION['nivel'] ==3) ){
    
}else{
    die ("Favor fazer o Login Com o Nível Adequado");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="icon" type="" href="iconeTAG02.png"/>
<!-- Adicionando JQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"
            integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
            crossorigin="anonymous"></script>

    <!-- Adicionando Javascript -->
<script src="scripts.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <title>TA&G-SISTEMAS</title>
</head>
<body>


<!-- Menu -->
<?php
include 'menu.php';
?>
<!-- Fim Menu -->



<div class="navbar navbar-expand-lg navbar navbar-dark bg-dark justify-content-center"style ="color:#BDC8BF;" >
  <!-- Content here -->
 <h5>Cadastro Cliente </h5>
</div>
<div class="container mt-5">

    <?php
        // Vamos colocar a Mensagem pra ver se o Cliente foi cadastrado ou não
        include ('mensagem.php');
    ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Adicionar Cliente
                    
                </h4>
            </div>
            <div class="card-body">
                <form action="codigos.php" method="POST">

                    <div class="mb-3">
                        <label>CPF</label>
                        <input type="text" name="cpf" pattern="(\d{3}\.?\d{3}\.?\d{3}-?\d{2})|(\d{2}\.?\d{3}\.?\d{3}/?\d{4}-?\d{2})"class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Nome</label>
                        <input type="text" name="nome" class="form-control"required>
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control"required>
                    </div>
                        
                            <div class="mb-3">
                                <label>Cep: </label><br>
                                <input name="cep" type="text" id="cep"  value=""class="form-control"required >
                            </div> 
                            <div class="mb-3">  
                                <label>Rua:</label><br>
                                <input name="rua" type="text" id="rua"  class="form-control" required >
                            </div> 
                            <div class="mb-3"> 
                                <label>Bairro:</label><br>
                                <input name="bairro" type="text" id="bairro"  class="form-control"required >
                            </div> 
                            <div class="mb-3"> 
                                <label>Cidade:</label><br>
                                <input name="cidade" type="text" id="cidade"  class="form-control"required >
                            </div> 
                            <div class="mb-3">     
                                <label>Estado:</label><br>
                                <select name="uf" id="uf" class="form-control"required>
                                    <option value="">-- Selecione Estado --</option>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                </select>
                               
                            </div>
                            <div class="mb-3">
                            <label  for="numero" >Número</label>
                                <input type="number"  id="numero" name="numero" class="form-control"required>
                            </div>
                            <div class="mb-3">
                                <label for="complemento">Complemento</label>
                                <input type="text" id="complemento" name="complemento" class="form-control"required> 
                            </div>
                    <div class="mb-3">
                        <button type="submit" name="salvarCliente" class="btn btn-primary">Salvar Cliente</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

</body>
</html>