<?php
require_once ("BL/UsuarisBL.php");

if ($_POST)
{
    $usuari = new UsuarisBL ();
    $resultat = $usuari->altaUsuari($_POST["DNI"]);

    if ( $resultat ){
        header('Location: error.php');
    }
    else{
        header('Location: index.php');
    }
    

}

?>