<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>

    <!-- Bootstrap -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <style>
        body {
            background: #f0f0f8;
            font-family: "Segoe UI", Tahoma, sans-serif;
        }
        .card {
            background: #ffffff;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }
    </style>
</head>

<body>

    <!-- BOTÓN REGRESAR -->
    <div class="container mt-4">
        <a href="index.html" class="btn btn-primary btn-lg mb-3">⬅ Regresar al Menú</a>
    </div>

    <!-- RESULTADO DENTRO DE UNA TARJETA -->
    <div class="container d-flex justify-content-center mt-4">
        <div class="card" style="width: 400px;">

        <?php
            $conexion=mysqli_connect("localhost","root","","alumnos") or
                die("problemas con la conexion");

            $registros=mysqli_query($conexion,"select codigo,nombre, codigocurso
                                from alumnos where email='$_REQUEST[email]'") or
                die("problemas en el select:".mysqli_error($conexion));

            if ($reg=mysqli_fetch_array($registros))
            {
                echo "<h3 class='text-success mb-3'>✔ Alumno Consultado</h3>";

                echo "<p><strong>Nombre:</strong> ".$reg['nombre']."</p>";

                echo "<p><strong>Curso:</strong> ";

                switch ($reg['codigocurso']) {
                    case 1: echo "PHP"; break;
                    case 2: echo "ASP"; break;
                    case 3: echo "JSP"; break;
                }

                echo "</p>";
            }
            else
            {
                echo "<h3 class='text-danger'>❌ Alumno no encontrado</h3>";
                echo "<p>No existe un alumno con ese email.</p>";
            }

            mysqli_Close($conexion);
        ?>

        </div>
    </div>

</body>
</html>
