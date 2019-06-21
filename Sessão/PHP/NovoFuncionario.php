<?php

session_start();
include '../PHP/Banco.php';
require_once '../CONTROLES/Controles.php';


$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$login = $_POST['login'];
$password = $_POST['password'];


$controle = new Controles();
$controle->insertFuncionario($con,$nome,$matricula,$login,$password);


?>
