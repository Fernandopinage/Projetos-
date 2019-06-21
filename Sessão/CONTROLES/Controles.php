<?php

include '../PHP/Banco.php';
session_start();



class Controles {

    public function insertFuncionario($con, $nome, $matricula, $login, $password) {

        try {
            $insert = $con->prepare("INSERT INTO `usuario`(`login`, `senha`, `matricula`, `nome`)  VALUES (:login,:password,:matricula,:nome)");
            $insert->bindValue(":login", $login);
            $insert->bindValue(":password", $password);
            $insert->bindValue(":matricula", $matricula);
            $insert->bindValue(":nome", $nome);
            $insert->execute();

            var_dump($insert);
            if ($linha = $insert->rowCount()) {

                $_SESSION['msg'] = TRUE;
                header('location:../HTML/Tela_Painel.php?painel=NovoFuncionario');
            }else {
                
                header('location:../HTML/Tela_Painel.php?painel=NovoFuncionario');
            }
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function insertMedicamento($con, $medicamento, $tipo, $lote, $descricao, $cod) {

        try {
            $inser = $con->prepare("INSERT INTO `medicamento`(`medicamento`, `tipo`, `lote`, `descricao`, `cod`) VALUES (:medicamento, :tipo, :lote, :descricao, :cod)");
            $inser->bindValue(":medicamento", $medicamento);
            $inser->bindValue(":tipo", $tipo);
            $inser->bindValue(":lote", $lote);
            $inser->bindValue(":descricao", $descricao);
            $inser->bindValue(":cod", $cod);
            $inser->execute();

            echo $medicamento . "<br>";
            echo $tipo . "<br>";
            echo $lote . "<br>";
            echo $descricao . "<br>";
            echo $cod . "<br>";



            if ($linha = $inser->rowCount()) {

                $_SESSION['msg'] = TRUE;
                header('location:../HTML/Tela_Painel.php?painel=CadastroMedicamento');
                
                
            } else {
                
                header('location:../HTML/Tela_Painel.php?painel=CadastroMedicamento');
            }
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
    public function insertEstoque($con,$data_fabricacao,$data_validade,$quantidade,$id_medicamento){
        
       
        try {
            
            $insert = $con->prepare("INSERT INTO `estoque`(`data_fabricacao`, `data_validade`, `quantidade`, `id_medicamento`) VALUES"
                    . "(:data_fabricacao,:data_validade,:quantidade,:id_medicamento)");
            
            $insert->bindValue("data_fabricacao",$data_fabricacao);
            $insert->bindValue("data_validade",$data_validade);
            $insert->bindValue("quantidade",$quantidade);
            $insert->bindValue("id_medicamento",$id_medicamento);
            $insert->execute();
            
            echo $data_fabricacao."<br>";
            echo $data_validade."<br>";
            echo $quantidade."<br>";
            echo $id_medicamento."<br>";
            var_dump($insert);
            
            if($linha = $insert->rowCount()){
                
                $_SESSION['msg'] = TRUE;
                header('location:../HTML/Tela_Painel.php?painel=ControledeEstoque');
                
            }else{
               header('location:../HTML/Tela_Painel.php?painel=ControledeEstoque');
            }
             
            
        } catch (PharException $exc) {
            echo $exc->getMessage();
        }
            
        
    }

}
