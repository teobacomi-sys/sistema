<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar correo</title>

    <!-- Bootstrap -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body style="background:#f0f0f8;">

    <!-- BOTÓN REGRESAR -->
    <div class="container mt-4">
        <a href="index.html" class="btn btn-primary btn-lg mb-3">
            ⬅ Regresar al Menú Principal
        </a>
    </div>

    <div class="container">

    <?php
        $conexion=mysqli_connect("localhost","root","","alumnos")or
        die("problema con la conexion");

        $registros=mysqli_query($conexion,"select * from alumnos
                                where email='$_REQUEST[email]'")or
                                die("problemas en el select:".mysqli_error($conexion));

        if ($reg=mysqli_fetch_array($registros))
        {
    ?>

        <!-- FORMULARIO ESTILIZADO -->
        <div class="border p-4 rounded shadow bg-white">
            <h2 class="text-center mb-4">Actualizar Email del Alumno</h2>

            <form action="update.php" method="post">

                <label class="form-label">Ingrese nuevo email:</label>
                <input type="text" name="mailnuevo" class="form-control mb-3"
                       value="<?php echo $reg['email']?>">

                <input type="hidden" name="mailviejo" 
                       value="<?php echo $reg['email']?>">

                <button type="submit" class="btn btn-success w-100">
                    Modificar
                </button>
            </form>
        </div>

    <?php
        }
        else {
            echo '<div class="alert alert-danger text-center mt-5">
                    No existe alumno con ese email.
                  </div>';
        }

        mysqli_Close($conexion);
    ?>
    </div>

</body>
</html>

<!-- BOTÓN MENÚ ABAJO -->
<div style="text-align:center; margin-top:20px;">
  
</div>
