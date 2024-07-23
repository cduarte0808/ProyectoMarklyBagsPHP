<?php
session_start();
require_once __DIR__ ."/../controllers/LoginController.php";
require_once __DIR__ ."/../databse/Conexion.php";
$controllerC = new LoginController(new Conexion());
$controllerC->indexL();