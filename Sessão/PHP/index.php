<?php
session_start();
include '../PHP/Banco.php';

if (isset($_POST['login'])) {
    $login = $_POST['login'];
}
if (isset($_POST['password'])) {
    $password = $_POST['password'];
}


$select = $con->prepare("SELECT * FROM `usuario` WHERE login =:login and senha=:password");
$select->bindValue(":login", $login);
$select->bindValue(":password", $password);
$select->execute();

if ($linha = $select->rowCount()) {
    
    $_SESSION['userlogin']= $login;
     
    header('location:../HTML/Tela_Painel.php');
    
} else {
    
    $_SESSION['msg'] = TRUE;
    header('location:../HTML/index.php');
    
}
?>