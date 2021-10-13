<?php
    include "Conexion.php";

        $Nombre =$_POST["Nombre"];
        $Correo =$_POST["Correo"];
        $Celular =$_POST["Celular"];
        $Pais =$_POST["Pais"];

        if (empty($Nombre)) {
            echo "La casilla nombre esta vacia";
        }else if (empty($Correo)) {
            echo "La casilla Correo esta vacia";
        }else if (empty($Celular)) {
            echo "La casilla Celular esta vacia";
        }else if (empty($Pais)) {
            echo "La casilla Pais esta vacia";
        }else{
            
        $sql = "SELECT * FROM personas WHERE CorreoElectronico = '$Correo'";

        $ejecutar = mysqli_query($conexion, $sql);
        $check_email = mysqli_num_rows($ejecutar);
        if ($check_email == 1) {
            echo   "Este correo ya se encuentra en uso";
            exit();
        }else{

            $insert = "INSERT INTO personas(NombreCompleto,Pais,Celular,CorreoElectronico) VALUES ('$Nombre','$Pais','$Celular','$Correo')";
            $ejecutar = mysqli_query($conexion, $insert);

            if ($ejecutar) {
                echo "Gracias por estar interesado en nosotros, estaremos en contacto! ";
            }else{
                echo "A ocurrido un error en la base de datos";
            };
        };
        }
        

?>