<?php


session_start();

$_SESSION['key'] = date("H:m,s");

echo $_SESSION['key'];

session_destroy();
?>