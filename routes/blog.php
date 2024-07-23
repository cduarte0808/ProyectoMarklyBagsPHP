<?php
session_start();
require_once __DIR__ ."/../controllers/BlogsController.php";
require_once __DIR__ ."/../databse/Conexion.php";
$controllerC = new BlogsController(new Conexion());
$controllerC->indexBl();