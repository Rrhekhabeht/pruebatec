<?php
  $conexion = mysqli_connect("localhost","root","","pruebatec");
if ($conexion -> connect_errno) {
  echo"Error al conectarse a la base de datos";
}
?>