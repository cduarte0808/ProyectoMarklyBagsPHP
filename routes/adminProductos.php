<?php
session_start();
require_once __DIR__ ."/../controllers/AdminProductosController.php";
require_once __DIR__ ."/../databse/Conexion.php";
$controllerC = new AdminProductosController(new Conexion());
$controllerC->indexP();

