<?php

class Usuari {
    private $conn;  // Conexión a la base de datos

    // Constructor de la clase
    public function __construct($conn) {
        $this->conn = $conn;
    }

    // Método para añadir un nuevo usuario
    public function addUser($username, $password) {
        // Aquí deberías implementar la lógica para añadir un nuevo usuario a la base de datos
        // ¡Importante! En un entorno de producción, deberías utilizar funciones de hash seguras para almacenar las contraseñas.
    }

    // Método para validar la contraseña de un usuario
    public function isValidPasswd($username, $password) {
        // Aquí deberías implementar la lógica para validar la contraseña de un usuario
        // ¡Importante! En un entorno de producción, deberías utilizar funciones de hash seguras y consultas preparadas.
    }

    // Método para validar la existencia de un usuario
    public function isValidUser($username) {
        // Aquí deberías implementar la lógica para validar la existencia de un usuario
        // ¡Importante! En un entorno de producción, deberías utilizar consultas preparadas.
    }

    // Otros métodos relacionados con la gestión de usuarios...
}

?>
