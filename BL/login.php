<?php
// Incluir la clase Usuari
include('Usuari.php');

// Lógica de validación y autenticación del formulario de login
// ...

// Si la validación es correcta, instanciar la clase Usuari
$usuariObj = new Usuari($conn); // Debes proporcionar la conexión a la base de datos

// Utilizar el método isValidUser para verificar la existencia del usuario
if ($usuariObj->isValidUser($username)) {
    // Utilizar el método isValidPasswd para validar la contraseña
    if ($usuariObj->isValidPasswd($username, $password)) {
        // Redirigir a dashboard.php si la autenticación es exitosa
        header("Location: dashboard.php");
        exit();
    } else {
        // Redirigir a error.php si la contraseña no es válida
        header("Location: error.php?mensaje=Contraseña incorrecta");
        exit();
    }
} else {
    // Redirigir a error.php si el usuario no existe
    header("Location: error.php?mensaje=Usuario no encontrado");
    exit();
}
?>
