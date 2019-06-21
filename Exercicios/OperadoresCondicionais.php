<?php

$idade = 19;
$senha = '123';
$acesso = TRUE;


if ($idade <= 18) {

    echo"Menor de Idade <br>";
} else {

    echo"Maior de Idade <br>";
}


if ($senha == '123') {
    echo"acesso autorizado <br>";
} else if ($senha == '1234') {

    echo"acesso autorizado tambem <br>";
} else {
    echo("acesso negado <br>");
}

if($acesso == true){
    echo"Correto <br>";
    
}else{
    
    echo"Incorreto <br>";
}

