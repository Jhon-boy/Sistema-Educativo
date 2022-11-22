<?php
$estudiante= $_POST['estudiante'];
$cedula= $_POST['cedula'];
$horas = $_POST['horas'];
$lugar = $_POST['lugar'];
$nombreP = $_POST['nombreP'];
$institucion = $_POST['institucion'];
$periodo = $_POST['periodo'];
session_start();


//Armo la Conexion
$conexion= mysqli_connect("localhost", "root", "", "its");

$insertar= "INSERT INTO practicas(nombreP, estudiante, cedula, horas, lugar, institucion, periodo) VALUES('nombreP','$estudiante', '$cedula', '$horas ', '$lugar', '$institucion', '$periodo')";
$resultado= mysqli_query($conexion, $insertar);
if($resultado){
    ?>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
        <div class="card w-50" style="margin: 20% 30% 0 30%;  max-width: 500px;" >
    <div class="card-body">
        <h5 class="card-title">Envío Exitoso</h5>
        <p class="card-text">El registro del formulario ha sido completado con exito</p>
    <center><a href="http://localhost/Oficial/modelo//VerEstudiante.php" type="button" class="btn btn-primary btn-1">Volver</a></center> 
    </div>
    </div>
    <?php
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