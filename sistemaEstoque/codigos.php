<?php

    include 'conex.php';
   
   
    //para usuário entrar na pagina do APP
    if (isset($_POST['entrar']))
    {
        //preparando os dados do formulario para a conexão com o Banco de dados
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $senha = mysqli_real_escape_string($con, $_POST['senha']);


        //fazendo a consulta no Banco de Dados
        $requisicao = "SELECT * FROM usuarios WHERE email = '$email' LIMIT 1";
        //preparando dos dados para envio conectando ao BD e mandando a Requisição
        $query_run = mysqli_query($con, $requisicao);

        //tranzendo os dados do usuário
        $usuario = $query_run->fetch_assoc();
        


        //verificando a senha digitada com a encriptada
        if (password_verify($senha, $usuario['senha'])){
            //se não tiver uma sessão ativa cria-se uma
            if(!isset($_SESSION)){
                session_start();
            }
            //tras os dados do usuário na seção
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['nivel'] = $usuario['nivel'];

        
            //vai até a pagina de inicial do App
            header("Location: telaInicial.php");
            exit(0);
        }
        else
        {
            // caso tudo esteja errado volta pra pagina de login
            echo  "Usuário ou Senhas Inválidas";
            header("Location: index.php");
            exit(0);
        }
    }

    

    //Salvar Cliente
    if(isset($_POST['salvarCliente']))
    {
        $cpf = mb_strtoupper ( mysqli_real_escape_string($con, $_POST['cpf']), "utf-8");
        $nome1 =  mb_strtoupper (mysqli_real_escape_string($con, $_POST['nome']), "utf-8");
        $email1 =  mysqli_real_escape_string($con, $_POST['email']);
        $cep =  mb_strtoupper (mysqli_real_escape_string($con, $_POST['cep']), "utf-8");
        $rua =  mb_strtoupper (mysqli_real_escape_string($con, $_POST['rua']), "utf-8");
        $bairro= mb_strtoupper (mysqli_real_escape_string($con, $_POST['bairro']), "utf-8");
        $cidade = mb_strtoupper ( mysqli_real_escape_string($con, $_POST['cidade']), "utf-8");
        $uf =  mb_strtoupper (mysqli_real_escape_string($con, $_POST['uf']), "utf-8");
        $numero = mb_strtoupper ( mysqli_real_escape_string($con, $_POST['numero']), "utf-8");
        $comp =  mb_strtoupper (mysqli_real_escape_string($con, $_POST['complemento']), "utf-8");
        

        $requisicao = "INSERT INTO cliente (cpf, nome, email,uf,cidade, cep, rua, bairro,numero,complemento) VALUES ('$cpf','$nome1','$email1','$uf','$cidade','$cep', '$rua', '$bairro','$numero','$comp')";

        $query_run = mysqli_query($con, $requisicao); 
        
    
        if($query_run)
        {
            $_SESSION['mensagem'] = "Cliente cadastrado com sucesso!";
            header("Location: cadastroCliente.php");
            exit(0);
        }
        else
        {
            $_SESSION['mensagem'] = "Cliente não cadastrado";
            header("Location: cadastroCliente.php");
            exit(0);
        }
        
    }

        







    include 'protect.php';
    ?>
