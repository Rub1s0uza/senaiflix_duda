
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!--Conectando o css-->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="img_layout/livinha.jpg"
          class="img-fluid" alt="Pipoca">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Login</p>
          </div>

          <form action="pages/autenticar.php" method="post">
            <!-- User input -->
            <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="usuario">Usuário</label>
            <input type="text" id="usuario" name="usuario" class="form-control form-control-lg"
                placeholder="Digite seu user" />
            
            </div>
            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-3">
            <label class="form-label" for="senha">Senha</label>
            <input type="password" id="senha" name="senha" class="form-control form-control-lg"
                placeholder="Digite sua senha" />
            
            </div>
         
          <div class="text-center text-lg-start mt-4 pt-2">
            <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                
          </div>

        </form>
      </div>
    </div>
  </div>
</section>
</body>
</html>
