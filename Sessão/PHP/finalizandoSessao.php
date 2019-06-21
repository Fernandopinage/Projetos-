<?php

session_start();
unset($_SESSION['userlogin']);


header('location:../HTML/index.php');