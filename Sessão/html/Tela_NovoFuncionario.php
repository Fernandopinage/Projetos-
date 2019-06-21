
<html>
    <head>
        <meta charset="UTF-8">
        <?php require_once '../LINKs/links.php';?>
       
    </head>
    <body>
        <div class="container">
            <h1 class="display-4">Funcionario </h1><hr><br>
             <samp>

                <?php
                if (isset($_SESSION['msg'])) {

                    if (!$_SESSION['msg']) {

                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                  <strong>Medicamento</strong> cadastrado com sucesso!
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                  </button>
                  </div>";
                    } else {

                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                         <strong>Medicamento</strong> cadastrado com sucesso!
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                              <span aria-hidden='true'>&times;</span>
                            </button>
                          </div>";
                    }
                    unset($_SESSION['msg']);
                }

                
                ?>
            </samp>
            <form method="post" action="../PHP/NovoFuncionario.php">
                <div class="row">

                    <div class="col">
                        <label>Nome</label>
                        <input type="text" name="nome" class="form-control" placeholder="Nome Funcionario"required="">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label>Nº Matricular</label>
                        <input type="text" name="matricula" class="form-control" placeholder="Matricular"required="">
                    </div>
                    <div class="col">
                        <label>Login</label>
                        <div class="form-group">
                            <input type="text" name="login" class="form-control" placeholder="Login"required="">
                        </div>
                    </div>
                    <div class="col">
                        <label>Senha</label>
                        <input type="password" name="password" class="form-control"placeholder="Password" required="">
                    </div>

                </div>

                <br>


                <input id="btn" type="submit" value="Enviar">
            </form>
        </div>
    </body>
</html>

