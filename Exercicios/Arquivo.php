<?php


$texto = "teste para cravar arquivo";
$arquivo ="file.txt";

$file = fopen($arquivo,"a+");
fwrite($file, "{$texto} \r\n");
fclose($file);


echo $file;
?>