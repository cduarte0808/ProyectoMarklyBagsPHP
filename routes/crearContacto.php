<?php
session_start();
require_once __DIR__ ."/../controllers/ContactoController.php";
require_once __DIR__ ."/../databse/Conexion.php";
$controllerCo = new ContactoController(new Conexion());
$controllerCo->crearContacto($_POST);