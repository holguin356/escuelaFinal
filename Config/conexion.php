<?php
$mysqli = new mysqli('localhost', 'root', '', 'bd_escuela');

if($mysqli->connect_errno){
    echo "fallo al conectar a Mysql: (" . $mysqli->connect_errno . ")";
}
// else {
//     echo "conexion exitosa";
// }
