<?php

Class BagsController {
    private $conexionDB;

    public function __construct($conexionDB) {

        $this->conexionDB = $conexionDB;
    }
    
    public function indexB() {
        include __DIR__."/../views/bags.php";
    }
}