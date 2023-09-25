<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="icon" type="" href="iconeTAG02.png"/>
    <title>TA&G-Login</title>
</head>
<body>
<!-- Section: Design Block -->
    <section class="">
    <!-- Jumbotron -->
    <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: #1D1D2A">
        <div class="container">
        <div class="row gx-lg-5 align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
            <h1 class="my-1 display-3 fw-bold ls-tight" style="color: #FFFFFFfc">
                TA&G <br/>
                <h3 class="my-2 display-3 fw-bold ls-tight" style="color: #3CDBC0fc;">Sistemas</h3>
            </h1>
            <p style="color: hsl(217, 10%, 50.8%)">
                Software desenvolvido de maneira Educacional
                para controle de estoque, Produção e Venda.
            </p>
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="card">
                <div class="card-body py-5 px-md-5">
                <form action="codigos.php" method = "post">

                            <div class="d-flex align-items-center mb-3 pb-1">
                            <img src="iconeTAG02.png" alt="login form" class="rounded mx-auto d-block" style="max-width: 185px; border-radius: 1rem 1rem 1rem 1rem;">
                            </div>

                            <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Entre em sua Conta</h5>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example17"  >Email</label>
                                <input type="email" id="form2Example17" class="form-control form-control-lg "name="email" />
                            
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example27" >Senha</label>
                                <input type="password" id="form2Example27" class="form-control form-control-lg" name="senha"/>
                                
                            </div>

                            <div class="pt-1 mb-4">
                                <button class="btn btn-dark btn-lg btn-block" type="submit" name="entrar">Entrar</button>
                            </div>

                            <p class="mb-5 pb-lg-2" style="color: #393f81;">Para Cadastro Solicitar ao seu Supervisor</p>
                            <a href="#!" class="small text-muted">Termos de uso</a>
                            <a href="#!" class="small text-muted">Politica de Privacidade</a>
                            </form>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>