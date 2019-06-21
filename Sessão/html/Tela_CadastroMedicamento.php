
<html>
    <head>
        <meta charset="UTF-8">
        <?php require_once '../LINKs/links.php'; ?>

    </head>
    <body>




        <div class="container">
            <h1 class="display-4">Cadastro </h1><hr><br>

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

            <form method="post" action="../PHP/CadastroMedicamento.php">
                <div class="row">

                    <div class="col">
                        <label>Medicamento</label>
                        <input type="text" name="medicamento" class="form-control" placeholder="Medicamento"required="">
                    </div>

                </div><br>
                <div class="row">

                    <div class="col">
                        <label>Tipo</label>
                        <div class="form-group">
                            <select class="form-control" name="tipo" id="exampleFormControlSelect1"required="">
                                <option></option>
                                <option>capsula</option>
                                <option>bisnaga</option>
                                <option>comprimido</option>
                                <option>vacina</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label>Codigo do Produto</label>
                        <input type="text" name="cod" class="form-control"placeholder="Codigo Produto" required="">
                    </div>
                    <div class="col">
                        <label>Lote</label>
                        <input type="text" name="lote" class="form-control" placeholder="Lote"required="">
                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Descrição</label>
                            <textarea class="form-control" name="descricao" id="exampleFormControlTextarea1" rows="3" ></textarea>
                        </div>
                    </div>
                </div>
                <br>

                <input id="btn" type="submit" value="Enviar">
            </form>

        </div>
    </body>
</html>