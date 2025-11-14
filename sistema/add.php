<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>problema</title>
</head>
<body>
    <?php
    $conexion=mysqli_connect("localhost","root","","alumnos")or die("problemas con la conexion");
    mysqli_query($conexion,"insert into alumnos(nombre, email, codigocurso) values ('$_REQUEST[nombre]','$_REQUEST[email]','$_REQUEST[codigocurso]')") or die("problemas en el select".mysqli_error($conexion));
    mysqli_close($conexion);
   echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";

echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Registro exitoso',
            text: 'El alumno fue registrado correctamente',
            confirmButtonText: 'Aceptar'
        }).then(() => {
            window.location = 'add.html';
        });
      </script>";
    ?>
    
</body>
</html>


