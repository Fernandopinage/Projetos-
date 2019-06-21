<?php

include '../PHP/Banco.php';
require_once '../CONTROLES/Controles.php';


$medicamento = $_POST['medicamento'];
$tipo = $_POST['tipo'];
$lote = $_POST['lote'];
$descricao = $_POST['descricao'];
$cod = $_POST['cod'];



$controle = new Controles();
$controle->insertMedicamento($con, $medicamento, $tipo, $lote, $descricao, $cod);
?>