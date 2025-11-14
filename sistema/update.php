<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>problema</title>

    <!-- Bootstrap solo para el recuadro -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
   <?php
   $conexion=mysqli_connect("localhost","root","","alumnos") or
       die("problemas con la conexion");

   mysqli_query($conexion, "update alumnos
                             set email='$_REQUEST[mailnuevo]'
                            where email='$_REQUEST[mailviejo]'") or
     die("problemas en el select:".mysqli_error($conexion));

   // Recuadro de éxito
   echo "
   <div class='container mt-5'>
       <div class='alert alert-success text-center fs-4'>
           ✔ Actualización Exitosa
       </div>
   </div>
   ";
   ?>
</body>
</html>

<!-- Botón volver al menú -->
<div style="text-align:center; margin-top:20px;">
    <a href="index.html" style="
        background-color: #4d3782;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 8px;
        font-weight: bold;
        transition: 0.3s;">⬅ Volver al Menú</a>
</div>
