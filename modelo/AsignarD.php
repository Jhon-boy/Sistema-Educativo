<?php
$carrera = $_POST['carreraa'];
$docente = $_POST['docente'];
session_start();


//Armo la Conexion
$conexion= mysqli_connect("localhost", "root", "", "its");

$insertar= "UPDATE `carrera` SET `docente` = '$docente' WHERE `carrera`.`nombre` = '$carrera'";
$resultado= mysqli_query($conexion, $insertar);
if($resultado){
    header("location:http://localhost/Oficial/vista/admin/admin.php");
}else{
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<div class="card w-50" style="margin: 20% 30% 0 30%;  max-width: 500px;" >
<div class="card-body">
<h5 class="card-title">Error</h5>
<p class="card-text">No se pudo enviar asignar al Docente a la Carrera!. Vuelva a intentarlo</p>
<center><a href="http://localhost/Oficial/vista/admin/admin.php" type="button" class="btn btn-primary btn-1">Volver</a></center> 
</div>
</div>
<?php
}

 ?>