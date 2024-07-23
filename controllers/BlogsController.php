<?php

Class BlogsController {
    private $conexionDB;

    public function __construct($conexionDB) {

        $this->conexionDB = $conexionDB;
    }
    
    public function indexBl() {
        include __DIR__."/../views/blog.php";
    }
}