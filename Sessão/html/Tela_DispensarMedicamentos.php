
<html>
    <head>
        <meta charset="UTF-8">
        <?php require_once '../LINKs/links.php';?>
       
    </head>
    <body>


        <div class="container">
            <h1 class="display-4">Dispensar </h1><hr><br>
            
                <div class="row">
                    <div class="col">
                        <label>Pesquisar Medicamento</label>
                        <input type="text" class="form-control" placeholder="Pesquisar">
                    </div>
                    

                </div>

        </div>
        <br><br><br>

        <div class="container">
           <form method="post" action="Tela_Recomendacoes.php">
                <div class="row">
                    <div class="col">
                        <label>Nome</label>
                        <input type="text" class="form-control" placeholder="Nome" required="">
                    </div>
                    <div class="col">
                        <label>NºSUS/CPF</label>
                        <input type="text" class="form-control" placeholder="Cartão SUS ou CPF" required="">
                    </div>
                    <div class="col">
                        <label>Data Dispensação</label>
                        <input type="datetime-local" class="form-control" required="">
                    </div>

                </div>
                <br>
                
                <br><br><br>
                
                <input id="btn" type="submit" value="Enviar">
            </form>
        </div>
    </body>
</html>