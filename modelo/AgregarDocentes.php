<?php
$nombre= $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$contraseña = $_POST['contra'];
session_start();


//Armo la Conexion
$conexion= mysqli_connect("localhost", "root", "", "its");
$insertar= "INSERT INTO profesores(nombre, apellido, correo, contraseña) VALUES( '$nombre', '$apellidos', '$email', '$contraseña')";
$resultado= mysqli_query($conexion, $insertar);
if($resultado){
    header("location:http://localhost/Oficial/modelo/AdminDocentes.php");
}else{
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<div class="card w-50" style="margin: 20% 30% 0 30%;  max-width: 500px;" >
<div class="card-body">
<h5 class="card-title">Error</h5>
<p class="card-text">No se pudo registrar al Docente!. Vuelva a intentarlo</p>
<center><a href="http://localhost/Oficial/modelo/AdminDocentes.php" type="button" class="btn btn-primary btn-1">Volver</a></center> 
</div>
</div>
<?php
}

 ?>
       
