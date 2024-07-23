<?php

Class LoginController {

    private $conexionDB;

    public function __construct($conexionDB) {

        $this->conexionDB = $conexionDB;
    }

    public function indexL() {
        include __DIR__."/../views/login.php";
    }

    //esta función es la que guardará en la base de datos la información de contactos que ingresa a través del formulario
    public function validarUsuario($dataForm) {
        var_dump($dataForm);
        $query = "SELECT ID FROM users WHERE email = :email and password = :password";
        $params = [
            ':email' => $dataForm['email'],
            ':password' => $dataForm['password']
        ];
        
        $usuariosDb = $this->conexionDB->runQuery($query,$params);

        if(count($usuariosDb) < 1) {
            http_response_code(500);
            echo "El usuario no existe o la contraseña es incorrecta";
        }else {
            http_response_code(200);
            echo "Echo el usuario logueado exitosamente";
            $_SESSION['user'] = $usuariosDb[0];
            $_SESSION['form-registro'] = '¡El usuario fue validado exitósamente, bienvenido al Módulo de Administración!';
            header("Location:adminProductos.php");            
            
        }
    }

}