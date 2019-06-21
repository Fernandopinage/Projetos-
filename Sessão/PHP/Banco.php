<?php

$host = "mysql:host=localhost;dbname=projeto";
$senha = "";
$root = "root";

try {
    $con = new PDO($host, $root, $senha);
} catch (PDOException $exc) {
    echo $exc->getMessage();
}
