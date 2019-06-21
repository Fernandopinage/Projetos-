<?php

define("min", 17);
define("max",45);
$idade = 18;

echo"minima é ". min ."<br>";
echo"maxima é ". max ."<br>";




if($idade >= min){
    
    echo" liberado ";
}
if($idade <= max){
    
    echo" liberado ";
}else{
    
    echo"bloqueado....";
}