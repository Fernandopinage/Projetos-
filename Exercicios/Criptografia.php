<?php

$criptografia0 = sha1("123456789");
$criptografia1 = md5("123456789");
$criptografia2 = base64_encode("luizfernandopinagecoutinho");

echo $criptografia0."<br>";
echo $criptografia1."<br>";
echo $criptografia2."<br>";

