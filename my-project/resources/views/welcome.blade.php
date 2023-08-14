<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
?>

<html>
<body>
    <?php
        if((!isset($_SESSION["id_token"]) || trim($_SESSION["id_token"] == ''))){ ?>
            <a href="login.php?type=login">Iniciar sesion </a><br/>
            <a href="login.php?type=register">Registrarse </a>
    <?php
        } else{
            echo '<pre>';
            var_dump($_SESSION);
            echo '</pre>';?>

            <a href="personalizar.php?type=manage">Personalizar </a>
            <br/>
            <a href="logout.php">Cerrar sesion </a>
    <?php
        }?>
</body>
</html>