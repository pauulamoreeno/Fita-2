<!--

Aquesta serà la plana principal de l'aplicació (index.php)

Mostrarà tots els camps de la BBDD i donarà la possibilitat de fer una nova alta

Per mostrar tots els camps:
1) Instanciem un objecte de la classe UsuarisBL
2) Cridem al mètode llistaUsuaris que em retorna el resultat de la consulta

-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuaris</title>
</head>
<body>

<?php
// Requerim l'arxiu de classe per si no està ja carregat
require_once ("BL/UsuarisBL.php");

// Instanciem objecte
$usuaris = new UsuarisBL ();

// Cridem al mètode i agafem resultats
$result = $usuaris->llistaUsuaris();  

// Si hi ha alguna cosa a mostrar, fem el recorregut un a un de tots els registres
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " - DNI: " . $row["dni"] . "<br>";
    }
  } else {
    echo "No hi ha usuaris";
  }

?>   

<!--  Mostrem link cap a la plana d'alta. No cal que sigui php ja que en aquest cas no cal executar cap codi de servidor --> 
<a href="alta.html"> Nova alta </a>

</body>
</html>
