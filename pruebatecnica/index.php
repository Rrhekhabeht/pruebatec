<?php
 include "funciones/Conexion.php";
 include "funciones/API.php"	
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    
    <script>
    $(document).ready(function() {
        $("#Enviar").on("click", function() {
            event.preventDefault();
            var Nombre_u = $("#Nombre").val();
            var Correo_u = $("#Correo").val();
            var Celular_u = $("#Celular").val();
            var Pais_u = $("#Pais").val();
            
            $.ajax({
                url: "funciones/registro.php",
                data: {
                    Nombre: Nombre_u,
                    Correo: Correo_u,
                    Celular: Celular_u,
                    Pais: Pais_u
                },
                type: "POST",
                success: function(datos) {
                    $("#Resultado").html(datos);
                }
            });
        });

    });
    </script>
  
    
</head>

<body>
    <form action="" method="post">
        <section class="h-100 h-custom" style="background-color: #8fc4b7;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-8 col-xl-6">
                        <div class="card rounded-3">
                            <img src="http://grupofortin.net/wp-content/uploads/2020/07/banner-contactanos.jpg"
                                class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                                alt="Sample photo">
                            <div class="card-body p-4 p-md-5">

                                <form class="px-md-2">

                                    <div class="form-outline mb-4">
                                        <input type="text" name="Nombre" id="Nombre" class="form-control"
                                            placeholder="Nombre completo">
                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">

                                            <input type="email" name="Correo" id="Correo" class="form-control"
                                                placeholder="Correo">


                                        </div>
                                        <div class="col-md-6 mb-4">

                                        <input type="text" name="Celular" id="Celular" class="form-control"
                                            placeholder="Celular">


                                        </div>
                                        <div class="col-md-6 mb-4">

                                        <?=$buffer?>
                                            <div id="Resultado"></div>

                                        </div>
                                    </div>

                                    <input type="submit" value="Enviar" class="btn btn-success btn-lg mb-1" name="Enviar" id="Enviar">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
</body>

</html>