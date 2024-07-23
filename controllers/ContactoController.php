<?php

Class ContactoController {

    private $conexionDB;

    public function __construct($conexionDB) {

        $this->conexionDB = $conexionDB;
    }

    public function indexC() {
        include __DIR__."/../views/contacto.php";
    }

    //esta función es la que guardará en la base de datos la información de contactos que ingresa a través del formulario
    public function crearContacto($dataForm) {
        var_dump($dataForm);
        $query = "INSERT INTO contacto (nombre_completo, correo_electronico, numero_contacto, asunto, mensaje) VALUES (:nombre, :correo, :numeroContacto, :asunto, :mensaje)";
        $params = [
            ':nombre' => $dataForm['nombre'],
            ':correo' => $dataForm['correo'],
            ':numeroContacto' => $dataForm['numeroContacto'],
            ':asunto' => $dataForm['asunto'],
            ':mensaje' => $dataForm['mensaje']
        ];
        
        $this->conexionDB->runQuery($query,$params);

        $_SESSION['form-contacto'] = '¡La información fue enviada exitósamente!';
        header("Location:contacto.php");

    }
}

