<?php
// Incluir la clase Usuari
include('Usuari.php');

// Lógica de validación y procesamiento del formulario de registro
// ...

// Si la validación es correcta, instanciar la clase Usuari
$usuariObj = new Usuari($conn); // Debes proporcionar la conexión a la base de datos

// Utilizar el método addUser para agregar un nuevo usuario
$usuariObj->addUser($username, $password);

// Redirigir a dashboard.php o index.php si el registro es exitoso
header("Location: dashboard.php"); // o "Location: index.php"
exit();
?>
