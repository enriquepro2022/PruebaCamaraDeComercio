<?php

require 'conexion.php';

$consultas = "SELECT * FROM clientes";
$query = mysqli_query($conectar,$consultas);

?>