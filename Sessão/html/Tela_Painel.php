<!DOCTYPE html>

<!inicializando sessao>

<html>
    <head>
        <meta charset="UTF-8">
        <?php
        session_start();
        require_once '../LINKs/links.php';
        ?>

    </head>
    <body>

        

        <div class="header">

            <div class="container">
                <div class="dropdown">
                    <ul class="nav justify-content-end">

                        <!sessao>
                        <?php
                        if ($_SESSION['userlogin']) {

                            echo $_SESSION['userlogin'];
                        } else {
                            $_SESSION['msg'] = FALSE;
                            header('location:../HTML/index.php');
                            
                        }
                        ?> &nbsp;&nbsp;<a href="../PHP/finalizandoSessao.php">Sair</a>
                    </ul>      
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="?painel=Painel">Painel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?painel=DispensarMedicamentos">Dispensar Medicamentos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?painel=ControledeEstoque">Controle de Estoque</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?painel=CadastroMedicamento">Cadastrar Medicamento</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?painel=Recomendacoes">Recomendações</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?painel=NovoFuncionario">Novo Funcionario</a>
                        </li>
                    </ul>

                </div>
            </div>

        </div>

        <div class="container">

            <!messagem do novo funcionario>
            <?php
            if (isset($_GET['msg'])) {

                $msg = $_GET['msg'];
                switch ($msg) {

                    case 1:
                        echo "<div class='alert alert-success' role='alert'>Cadastrado com Sucesso</div>";
                        break;

                    case 2:
                        echo "<div class='alert alert-danger' role='alert'>Erro ao Cadastrar</div>";
                        break;
                }
            }
            ?>

            <!função menu>

            <?php
            $painel = filter_input(INPUT_GET, 'painel', FILTER_SANITIZE_STRING);

            switch ($painel) {

                case 'Painel':

                    require_once ('Tela_Painel.php');
                    break;

                case 'DispensarMedicamentos':

                    require_once ('Tela_DispensarMedicamentos.php');

                    break;


                case 'ControledeEstoque':

                    require_once ('Tela_ControledeEstoque.php');
                    break;

                case 'CadastroMedicamento':

                    require_once ('Tela_CadastroMedicamento.php');
                    break;

                case 'Recomendacoes':

                    require_once ('Tela_Recomendacoes.php');
                    break;

                case 'NovoFuncionario':

                    require_once ('Tela_NovoFuncionario.php');
                    break;
            }
            ?>
        </div>


    </body>
    <script src="../BOOTSTRAP-JS/bootstrap.min.js"></script>
    <script src="../BOOTSTRAP-JS/bootstrap.js"></script>
    <br>

</html>
