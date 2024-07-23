<?php

class Conexion {

    private $pdo;

    public function __construct() {

        $dbName = "marklybags";
        $host = "127.0.0.1";
        $userName = "root";
        $dbPassword = "admin";
        $dbTable = "contacto";
        $this->pdo = new PDO("mysql:host=".$host.";dbname=".$dbName,$userName,$dbPassword);
    }

    public function runQuery(String $query, $params = []) {

        $stmt = $this->pdo->prepare($query);
        foreach ($params as $key => $value) {
            $stmt->bindValue($key, $value, PDO::PARAM_STR);
        }
        $stmt->execute();
        return $stmt->fetchAll();
    }    
}
