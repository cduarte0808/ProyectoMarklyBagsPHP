<?php
session_start();
require_once __DIR__ ."/../controllers/ContactoController.php";
require_once __DIR__ ."/../databse/Conexion.php";
$controllerC = new ContactoController(new Conexion());
$controllerC->indexC();