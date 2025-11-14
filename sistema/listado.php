<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>problema</title>

    <!-- Diseño Bootstrap -->
    <link rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body style="background:#f0f0f8;">

    <!-- BOTÓN MENÚ -->
    <div class="container mt-4">
        <a href="index.html" class="btn btn-primary btn-lg mb-3">
            ⬅ Regresar al Menú Principal
        </a>
    </div>

    <h1 class="text-center mb-4">Listado de Alumnos</h1>

    <div class="container">
        <div class="border p-4 rounded bg-white shadow">

            <!-- AQUI VA TU CÓDIGO TAL CUAL SIN CAMBIOS -->
            <?php
            $conexion=mysqli_connect("localhost","root","","alumnos")or
                 die("problemas con la conexion");
            $registros=mysqli_query($conexion,"select codigo,nombre, email, codigocurso
                                         from alumnos") or
                   die("problemas en el select:".mysqli_error($conexion));
            while ($reg=mysqli_fetch_array($registros))
                {
                    echo "codigo:".$reg['codigo']."<br>";
                    echo "Nombre:".$reg['nombre']."<br>";
                    echo "Email:".$reg['email']. "<br>";
                    echo "curso:";
                    switch ($reg['codigocurso']){
                        case 1:echo "PHP";
                               break;
                        case 2:echo "ASP";
                               break;
                        case 3:echo "JSP";
                               break;
                    }
                    echo "<br>";
                    echo "<hr>";

                }    
                mysqli_Close($conexion);
                ?> 

        </div>
    </div>

    <!-- BOTÓN ABAJO (TU ORIGINAL) -->
    <div style="text-align:center; margin-top:20px;">
     
    </div>

</body>
</html>
