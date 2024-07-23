<?php
session_start();
require_once __DIR__ ."/../controllers/AdminProductosController.php";
require_once __DIR__ ."/../databse/Conexion.php";
$controllerPr = new AdminProductosController(new Conexion());
$controllerPr->crearProductos($_POST);