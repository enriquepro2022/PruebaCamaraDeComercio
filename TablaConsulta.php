<?php

$host = "localhost";
$user = "root";
$clave = "";
$bd  = "prueba";

$conectar = mysqli_connect($host,$user,$clave,$bd);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    <title>Document</title>
    
<body>
   
<nav style="background-color:#00796b;">
        <center>
            <h1 style="color:white;">Listado De Datos</h1>

        </center>
    </nav>
<div class="container ">
    
<table class="table ">
    <tr>
    <thead class="thead-dark">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Correo</th>
                <th scope="col">Telefono</th>
            </tr>
        </thead>
    <?php  
    $sql="SELECT * from clientes";
    $resul=mysqli_query($conectar,$sql);
    foreach ($resul as $row){ ?>
        <tr>
            <td><?php echo $row['nombre'];?> </td>
            <td><?php echo $row['apellido'];?> </td>
            <td><?php echo $row['email'];?> </td>
            <td><?php echo $row['telefono'];?> </td>
        </tr>


        </tbody>


        <?php
        }
        ?>
            
</table>
<button type="button" class="btn btn-primary"><a style="color: #ffff; text-decoration: none"href="index.html">añadir datos</a></button>

</div>
<style>
       
    </style>
    
</body>
</html>