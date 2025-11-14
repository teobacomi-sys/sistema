<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar Alumno</title>

    <!-- Bootstrap -->
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

    <div class="container">

        <?php
        // ======= TU CÓDIGO ORIGINAL SIN CAMBIOS =======
        $conexion=mysqli_connect("localhost","root","","alumnos")or
        die("<div class='alert alert-danger'>problemas con la conexion</div>");

        $registros=mysqli_query($conexion, "select codigo from alumnos
                                where email='$_REQUEST[email]'")or
        die("<div class='alert alert-danger'>problemas en el select:".mysqli_error($conexion)."</div>");

        if ($reg=mysqli_fetch_array($registros))
        {
            mysqli_query($conexion,"delete from alumnos where email='$_REQUEST[email]'") or
            die("<div class='alert alert-danger'>problemas en el select:".mysqli_error($conexion)."</div>");

            // === MENSAJE DE ÉXITO DISEÑADO ===
            echo "
            <div class='alert alert-success p-4 mt-4 text-center shadow rounded'>
                <h3>Alumno eliminado con éxito</h3>
                <p><strong>Email:</strong> ".$_REQUEST['email']."</p>
            </div>";
        }
        else
        {
            // === MENSAJE DE ERROR DISEÑADO ===
            echo "
            <div class='alert alert-warning p-4 mt-4 text-center shadow rounded'>
                <h3>No existe un alumno con ese email</h3>
            </div>";
        }

        mysqli_close($conexion);
        ?>
    </div>

    <!-- BOTÓN ABAJO (MANTENIDO) -->
    <div style="text-align:center; margin-top:20px;">
        
    </div>

</body>
</html>
