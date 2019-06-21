<?php

include '../PHP/Banco.php';

if (isset($_GET['pesquisar'])) {

    echo retorna($_GET['pesquisar'], $con);
}



function retorna($pesquisar, $con) {

    $sql = "SELECT * FROM `medicamento` WHERE medicamento = '$pesquisar' limit 1";
    $select = $con->query($sql);
    while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
        
       $row['medicamento'] = $linha['medicamento'];
       $row['tipo'] = $linha['tipo'];
       $row['cod'] = $linha['cod'];
       $row['lote'] = $linha['lote'];
       $row['id_medicamento'] = $linha['id_medicamento'];
    }
    return json_encode($row);
}


?>
