<?php

$salario = 1000;
$reajuste = 0;

function Salario($salario,$reajuste){
    
    $reajuste=305;
    return ( $salario + $reajuste);
    
    
}

$valorFinal =  Salario($salario, $reajuste);
echo"salario final é ".$valorFinal;

?>
