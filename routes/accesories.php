<?php
session_start();
require_once __DIR__ ."/../controllers/AccesoriesController.php";
require_once __DIR__ ."/../databse/Conexion.php";
$controllerC = new AccesoriesController(new Conexion());
$controllerC->indexA();