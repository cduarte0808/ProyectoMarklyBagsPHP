<?php

Class AccesoriesController {
    private $conexionDB;

    public function __construct($conexionDB) {

        $this->conexionDB = $conexionDB;
    }
    
    public function indexA() {
        include __DIR__."/../views/accesories.php";
    }
}