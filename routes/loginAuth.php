<?php
session_start();
require_once __DIR__ ."/../controllers/LoginController.php";
require_once __DIR__ ."/../databse/Conexion.php";
$controllerL = new LoginController(new Conexion());
$controllerL->validarUsuario($_POST);