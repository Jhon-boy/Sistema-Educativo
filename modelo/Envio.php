<?php
//Armo la Conexion
$conexion= mysqli_connect("localhost", "root", "", "its");
session_start();
$usuario = $_SESSION['username'];

$descripcion = $_POST['descripcion'];
$titulo = $_POST['titulo'];
$fecha = $_POST['fecha'];
$id= $_POST['id_'];
// $doc= $_POST['doc'];

if($_FILES["archivo"]){
    $nombre_base = basename($_FILES["archivo"]["name"]);//Obtengo el nombre del campo del archivo
    $nombre_final =  date("m-d-y"). "-". date("H-i-s"). "-" .  $nombre_base;
    $ruta_ = "files/";
    $ruta = "http://localhost/Oficial/archivos/". $nombre_final;

    // $subir = move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta);
    $subir = $nombre_final;
    if($subir){
        $insertar= "INSERT INTO documentos(titulo, descripcion, fecha, archivo, id_estudiante) VALUES('$titulo', '$descripcion', '$fecha ', '$ruta', '$id')";
        $resultado= mysqli_query($conexion, $insertar);
        if($resultado){
            ?>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
        <div class="card w-50" style="margin: 20% 30% 0 30%;  max-width: 500px;" >
    <div class="card-body">
        <h5 class="card-title">Envío Exitoso</h5>
        <p class="card-text">El registro del formulario ha sido completado con exito</p>
    <center><a href="http://localhost/Oficial/vista/Estudiante/estudiante.php" type="button" class="btn btn-primary btn-1">Volver</a></center> 
    </div>
    </div>
    <?php
        } else{
           printf("Errormessage: %s\n", mysqli_error($conexion));
        }
    } else{
        ?>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        
            <div class="card w-50" style="margin: 20% 30% 0 30%;  max-width: 500px;" >
        <div class="card-body">
            <h5 class="card-title">Error</h5>
            <p class="card-text">No se pudo enviar el formulario!. Vuelva a intentarlo</p>
        <center><a href="http://localhost/Oficial/vista/Estudiante/estudiante.php" type="button" class="btn btn-primary btn-1">Volver</a></center> 
        </div>
        </div>
        <?php
    } 
}


//Realizo la consulta con los datos enviados
 ?>