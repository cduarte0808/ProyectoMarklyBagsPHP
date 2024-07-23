<?php

Class AdminProductosController {

    private $conexionDB;

    public function __construct($conexionDB) {

        $this->conexionDB = $conexionDB;
    }

    public function indexP() {
        include __DIR__."/../views/adminProductos.php";
    }

    //esta función es la que guardará en la base de datos la información de productos que ingresa a través del formulario
    public function crearProductos($dataForm) {
        var_dump($dataForm);
        $query = "INSERT INTO productos (nombre, descripcion) VALUES (:nombre, :descripcion)";
        $params = [
            ':nombre' => $dataForm['nombre'],
            ':descripcion' => $dataForm['descripcion']
        ];
        
        $this->conexionDB->runQuery($query,$params);

        $_SESSION['form-registro'] = '¡La información fue registrada exitósamente!';
        header("Location:adminProductos.php");

    }
}

