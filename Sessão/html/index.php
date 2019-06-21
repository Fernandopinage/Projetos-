<!DOCTYPE html>
<?php
session_start();

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../css/index.css">
        <?php require_once '../LINKs/links.php'; ?>

    </head>
    <body>
        <div class="login-page">
            <div class="form">

                <form class="login-form" action="../PHP/index.php" method="POST">
                    <input type="text" name="login" placeholder="Login"/>
                    <input type="password" name="password" placeholder="Senha"/>
                    <button id="btn">Acessar</button>
                    <samp>
                        
                        <?php
                if (isset($_SESSION['msg'])) {

                    if ($_SESSION['msg']) {

                        echo "<div class='alert alert-danger' role='alert'>  login ou senha inválidos!</div>";
                    } else{

                        echo "<div class='alert alert-warning' role='alert'>  deslogado com sucesso!</div>";
                    }
                    unset($_SESSION['msg']);
                }

                
                ?>
                    </samp>
                </form>

            </div>
        </div>

    </body>


    <footer>
        <script src="../js/jquery.js"></script>
        
    </footer>

</html>
