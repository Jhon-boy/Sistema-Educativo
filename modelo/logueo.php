<?php
$email = $_POST['email'];
$contra = $_POST['contra'];
$tipo = $_POST['tipo'];
session_start();
// $_SESSION['email'] = $email;

// include("http://localhost/Oficial/conexion/conexion.php");
// Aqui posiblemente va
$conexion= mysqli_connect("localhost", "root", "", "its");
if($tipo == 'Profesor'){
    $consulta="SELECT * FROM profesores WHERE correo = '$email' and contraseña= '$contra'";
    $resultado= mysqli_query($conexion, $consulta);
    $filas = mysqli_fetch_array($resultado);
    if($filas){
        $_SESSION['username'] =$filas['nombre'];
        header("location:http://localhost/Oficial/vista/Profesor/profesor.php");
    } else{
        ?>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
             <link rel="stylesheet" href="http://localhost/Oficial/public/style.css">  
 
    <div class="card w-50" style="margin: 20% 30% 0 30%;  max-width: 500px;" >
  <div class="card-body">
    <h5 class="card-title">Usuario no encontrado</h5>
    <p class="card-text">Correo o Contraseña incorrecta!. Vuelva a intentarlo</p>
   <center><a href="http://localhost/Oficial/controlador/controlador.php?aux=2" type="button" class="btn btn-primary btn-1">Volver</a></center> 
  </div>
</div>
        <?php
    }
} else if($tipo == 'Estudiante'){
    $consulta= "SELECT * FROM estudiantes WHERE cedula = '$email' and cedula= '$contra'";
    $resultado= mysqli_query($conexion, $consulta);
    $filas = mysqli_fetch_array($resultado);
    if($filas){
        $_SESSION['username'] =$filas['cedula'];
        header("location:http://localhost/Oficial/vista/Estudiante/estudiante.php");
    } else{
        ?>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
                    <link rel="stylesheet" href="http://localhost/Oficial/public/style.css">  
        
            <div class="card w-50" style="margin: 20% 30% 0 30%;  max-width: 500px;" >
        <div class="card-body">
            <h5 class="card-title">Estudiante no encontrado</h5>
            <p class="card-text">Correo o Contraseña incorrecta!. Vuelva a intentarlo</p>
        <center><a href="http://localhost/Oficial/controlador/controlador.php?aux=2" type="button" class="btn btn-primary btn-1">Volver</a></center> 
        </div>
        </div>
        <?php
    }
} else{
    $consulta="SELECT * FROM administrador WHERE correo = '$email' and contraseña= '$contra'";
    $resultado= mysqli_query($conexion, $consulta);
    $filas = mysqli_fetch_array($resultado);
    if($filas){
        $_SESSION['username'] =$filas['nombre'];
        header("location:http://localhost/Oficial/vista/admin/admin.php");
    } else{
        ?>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
             <link rel="stylesheet" href="http://localhost/Oficial/public/style.css">  
 
    <div class="card w-50" style="margin: 20% 30% 0 30%;  max-width: 500px;" >
  <div class="card-body">
    <h5 class="card-title">Usuario no encontrado</h5>
    <p class="card-text">Correo o Contraseña incorrecta!. Vuelva a intentarlo</p>
   <center><a href="http://localhost/Oficial/controlador/controlador.php?aux=2" type="button" class="btn btn-primary btn-1">Volver</a></center> 
  </div>
</div>
        <?php
}
}
//echo mysqli_query($conexion,$sql);
mysqli_free_result($resultado);
mysqli_close($conexion);

?>