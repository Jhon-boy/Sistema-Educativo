<?php
//Armo la Conexion
$conexion= mysqli_connect("localhost", "root", "", "its");
session_start();
$usuario = $_SESSION['username'];

//RECIBO TODOS LOS DATOS
$codigo= $_POST['codigo'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$semestres = $_POST['semestres'];
$modalidad= $_POST['modalidad'];


if($_FILES["archivo"]){
    $nombre_base = basename($_FILES["archivo"]["name"]);//Obtengo el nombre del campo del archivo
    $ruta_ = "fotos/";// MAMA AYUDAAAAAA
    $ruta = $ruta_. $nombre_base;
    if(!file_exists($ruta_)){
        mkdir($ruta_, 0777);
    }
    $subir = move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta);

    // $subir = $nombre_final;
    if($subir){
        $insertar= "INSERT INTO carrera(codigo, nombre, descripcion, semestres, modalidad, foto) VALUES('$codigo', '$nombre', '$descripcion', '$semestres', '$modalidad','$ruta')";
        $resultado= mysqli_query($conexion, $insertar);
        if($resultado){
            ?>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
        <div class="card w-50" style="margin: 20% 30% 0 30%;  max-wmodalidadth: 500px;" >
    <div class="card-body">
        <h5 class="card-title">Registro Exitoso</h5>
        <p class="card-text">El registro del formulario ha smodalidado completado con exito</p>
    <center><a href="http://localhost/Oficial/vista/admin/admin.php" type="button" class="btn btn-primary btn-1">Volver</a></center> 
    </div>
    </div>
    <?php
        } else{
           printf("Errormessage: %s\n", mysqli_error($conexion));
        }
    } else{
        ?>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        
            <div class="card w-50" style="margin: 20% 30% 0 30%;  max-wmodalidadth: 500px;" >
        <div class="card-body">
            <h5 class="card-title">Error</h5>
            <p class="card-text">No se pudo registrar la carrera!. Vuelva a intentarlo</p>
        <center><a href="http://localhost/Oficial/vista/Estudiante/estudiante.php" type="button" class="btn btn-primary btn-1">Volver</a></center> 
        </div>
        </div>
        <?php
    } 
}


//Realizo la consulta con los datos enviados
 ?>