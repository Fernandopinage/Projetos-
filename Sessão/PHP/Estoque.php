<?php

include '../PHP/Banco.php';
require_once '../CONTROLES/Controles.php';

$id_medicamento = $_POST['id_medicamento'];
$data_fabricacao = $_POST['data_fabricacao'];
$data_validade = $_POST['data_validade'];
$quantidade = $_POST['quantidade'];

$controle = new Controles();
$controle->insertEstoque($con,$data_fabricacao,$data_validade,$quantidade,$id_medicamento);

?>