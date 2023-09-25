<?php
    if( ($_POST['nome']!=null) && ($_POST['email']!=null)&& ($_POST['senha']!=null)&&($_POST['rsenha']!=null)&&($_POST['nivel']!=null)){

        echo "OK Tudo Preenchido<br>";
        if ($_POST['senha'] == $_POST['rsenha']){
            echo "as senhas são iguais<br>";
            
            if(isset($_POST['cadastro'])){
                echo "enviar para o Banco<br>";
                include 'conex.php';
                $nome = mysqli_real_escape_string($con,$_POST['nome']);
                $email = mysqli_real_escape_string($con,$_POST['email']);
                $nivel = mysqli_real_escape_string($con,$_POST['nivel']);
                $senha = password_hash( mysqli_real_escape_string($con,$_POST['senha']), PASSWORD_DEFAULT);


                $requisicao = "INSERT INTO usuarios (nome,email,senha,nivel) VALUES('$nome','$email','$senha','$nivel')";
                $query_run = mysqli_query($con,$requisicao);




            }
        }else{
        echo "as senhas devem ser iguais<br>";
        }
    
    }else{
        echo "Algum Campo ficou em Branco <br>";
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    cadastrar Usuário Master
    <form action="" method="post">
        Nome:<input type="text" name="nome" require><br>
        Email:<input type="email" name="email"require><br>
        Senha:<input type="password" name="senha"require><br>
        Repita a Senha<input type="password" name="rsenha"require><br>
        <select class="form-select" aria-label="Default select example" name="nivel">
            <option selected>Abra para Selecionar o Nível</option>
            <option value="1">Administrador</option>
            <option value="2">Estoque</option>
            <option value="3">Vendas</option>
            <option value="4">Produção</option>
        </select>
        <button type="submit" name= "cadastro"> Cadastrar Usuário Master</button>


    </form>
</body>
</html>
