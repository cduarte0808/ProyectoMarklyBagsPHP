<?php
session_start();
require_once __DIR__ ."/../controllers/BagsController.php";
require_once __DIR__ ."/../databse/Conexion.php";
$controllerC = new BagsController(new Conexion());
$controllerC->indexB();