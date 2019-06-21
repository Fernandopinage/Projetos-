
<html>


    <head>
        <meta charset="UTF-8">
        <?php
        //******* link do bootstrap
        require_once '../LINKs/links.php';
        require_once '../PHP/Banco.php';
        ?>
    </head>
    <body>

        <!--
        funçao da entrada no Estoque
        -->

        <div class="container">
            <h1 class="display-4">Estoque </h1><hr><br>
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
            <!--
           funçao pesquisar medicamento via jquery
            -->    
            <form method="post" action="../PHP/Estoque.php">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Pesquisar  Medicamento </label>
                            <input type="text" class="form-control" id="pesquisar" name="pesquisar" placeholder="Medicamento" value=""  required="">
                        </div>
                    </div>
                </div>


                <br>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Medicamento</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Cod</th>
                            <th scope="col">Lote</th>
                            <th scope="col">data_fabricacao</th>
                            <th scope="col">data_validade</th>
                            <th scope="col">quantidade</th>
                            <th scope="col">Excluir</th>
                            <th scope="col">Alterar</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                        
                       
                        $sql = "SELECT * FROM `medicamento` LEFT OUTER JOIN  `estoque`ON estoque.id_estoque = medicamento.id_medicamento";
                        $select = $con->query($sql);
                        while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {

                            $row['medicamento'] = $linha['medicamento'];
                            $row['tipo'] = $linha['tipo'];
                            $row['cod'] = $linha['cod'];
                            $row['lote'] = $linha['lote'];
                            $row['id_medicamento'] = $linha['id_medicamento'];
                            $row['data_fabricacao'] = $linha['data_fabricacao'];
                            $row['data_validade'] = $linha['data_validade'];
                            $row['quantidade'] = $linha['quantidade'];
                            
                            echo "<tr>";
                            echo "<th scope='col'>". $row['medicamento'] ."</th>";
                            echo "<th scope='col'>". $row['tipo'] ."</th>";
                            echo "<th scope='col'>". $row['cod'] ."</th>";
                            echo "<th scope='col'>".  $row['lote'] ."</th>";
                            echo "<th scope='col'>".  $row['data_fabricacao'] ."</th>";
                            echo "<th scope='col'>".  $row['data_validade'] ."</th>";
                            echo "<th scope='col'>".  $row['quantidade'] ."</th>";
                            echo"<th><button type='button' class='btn btn-danger btn-sm'>Danger</button></th>";
                            echo"<th><button type='button' class='btn btn-primary btn-sm'>Danger</button></th>";
                            
                            echo "<tr>";
                            
                        }
                         
                        ?>
                    </tbody>
                           
                </table><br><br>
                <!--
             Preenchendo campo com jquery automatico
                -->  

                <div class="row">
                    <div class="col">
                        <label>Medicamento</label>
                        <input type="text" class="form-control" name="medicamento" placeholder="Medicamento" value="" readonly required="">
                    </div>
                    <div class="col">
                        <label>Tipo</label>
                        <div class="form-group">

                            <input type="text" class="form-control"name="tipo" placeholder="tipo" value="" readonly readonly required="">
                        </div>
                    </div>
                    <div class="col">
                        <label>Codigo do Produto</label>
                        <input type="text" class="form-control"name="cod" placeholder="Codigo"value="" readonly readonly required="">
                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <label>Lote</label>
                        <input type="text" class="form-control" name="lote" placeholder="Lote"value="" readonly readonly required="">
                                                
                    </div>
                    <div>
                    <input type="hidden" id="id_medicamento" name="id_medicamento" value="" >
                    </div>
                    <div class="col">
                        <label>Data de Fabricação</label>
                        <input type="date" name="data_fabricacao" class="form-control"  required="">
                    </div>
                    <div class="col">
                        <label>Data de Validade</label>
                        <input type="date" name="data_validade" class="form-control"  required="">
                    </div>
                    <div class="col">
                        <label>Quantidade</label>
                        <input type="text" name="quantidade" class="form-control" required="">
                    </div>

                </div>
                <br>

                <input id="btn" type="submit" value="Enviar">
            </form>
        </div>

    </body>

    <!--
       roda-pé do site
    -->
    <footer>
        <!--
       link do jquery
        -->
        <script src="../js/jquery.js"></script>
        <!--
       funçao script para preencher campo automatico 
        -->
        <script>

            $(document).ready(function() {
                $('#pesquisar').blur(function() { //blur e comando para da tab e trazer os campos preenchendo automaticos

                    var $medicamento = $("input[name='medicamento']");//criando as variaveis que seram preenchidos
                    var $tipo = $("input[name='tipo']");
                    var $cod = $("input[name='cod']");
                    var $lote = $("input[name='lote']");
                    var $id_medicamento = $("input[name='id_medicamento']");

                    $.getJSON('../PHP/SelectEstoque.php', {// $.getJSON ele enviar o dados #pesquisar via GET para SelectEstoque.php 
                        pesquisar: $(this).val()
                    }, function(json) {
                        $medicamento.val(json.medicamento);
                        $tipo.val(json.tipo);
                        $cod.val(json.cod);
                        $lote.val(json.lote);
                        $id_medicamento.val(json.id_medicamento);
                    });
                });
            });

        </script>
    </footer>
</html>

