<?php

$SERVIDOR = "LOCALHOST";
$USUARIO="ROOT";
$CONTRASEÑA="";
$base_datos="Escuela";
$conn = new mysqlil($SERVIDOR,$USUARIO,$CONTRASEÑA,$base_de_datos);
if($conn->connect_error){
    die("Error en la conexion:" .$conn->connect_error);
}

echo"Conectado exitosamente a la base de datos'$base_datos'";

?>