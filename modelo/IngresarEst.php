<?php
//Armo la Conexion
$conexion= mysqli_connect("localhost", "root", "", "its");
session_start();
$usuario = $_SESSION['username'];

//RECIBO TODOS LOS DATOS
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$correo= $_POST['correo'];
$cedula= $_POST['cedula'];
$tipo_indent= $_POST['tipo_indent'];
$contacto= $_POST['contacto'];
$fecha_Nac= $_POST['fecha_Nac'];
$edad= $_POST['edad'];
$genero= $_POST['genero'];
$discapacidad= $_POST['discapacidad'];
$porcentaje= $_POST['porcetaje'];
$provincia= $_POST['provincia'];
$canton= $_POST['canton'];
$parroqui= $_POST['parroqui'];
$telefono_e= $_POST['telefono_e'];
$nombre_e= $_POST['nombre_e'];
$parenteso= $_POST['parenteso']; 
$pais = $_POST['Pais'];
$carrera = $_POST['carrera'];

if($_FILES["archivo"]){
    $nombre_base = basename($_FILES["archivo"]["name"]);//Obtengo el nombre del campo del archivo
    $ruta_ = "cedulas/";
    $ruta = $ruta_. $nombre_base;
    if(!file_exists($ruta_)){
        mkdir($ruta_, 0777);
    }
    $subir = move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta);

    // $subir = $nombre_final;
    if($subir){
        $insertar= " INSERT INTO estudiantes(nombre, apellido, correo, cedula, fecha_Nac, edad,
         tipo_indent, provincia, canton, parroqui, genero, discapacidad, porcentaje, contacto, 
         telefono_e, nombre_e, parenteso, cedula_pdf, pais) 
         VALUES ('$nombre', '$apellido', '$correo', '$cedula', '$fecha_Nac', '$edad', '$tipo_indent', '$provincia',
          '$canton','$parroqui' ,'$genero', '$discapacidad', '$porcentaje', '$contacto', '$telefono_e', '$nombre_e', '$parenteso', '$ruta', '$pais')";
        $resultado= mysqli_query($conexion, $insertar);
        if($resultado){
            ?>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
        <div class="card w-50" style="margin: 20% 30% 0 30%;  max-wmodalidadth: 500px;" >
    <div class="card-body">
        <h5 class="card-title">Registro Exitoso</h5>
        <p class="card-text">El registro del formulario ha sido completado con exito</p>
        <?php
        $seleccionar = "SELECT codigo from carrera WHERE nombre = '$carrera'";
        $consulta_1= mysqli_query($conexion, $seleccionar);
        $resultado_1 = mysqli_fetch_array($consulta_1);
        $pos_1 = $resultado_1['codigo'];
        if($resultado_1){
            $seleccionar_e= "SELECT id from estudiantes WHERE cedula = '$cedula'";
            $consulta_e= mysqli_query($conexion, $seleccionar_e);
            $resultado_e = mysqli_fetch_array($consulta_e); 
             $pos_e = $resultado_e['id'];
            if($resultado_e){
                $insertar_c = "INSERT INTO carreras( codigo, nombre, id_estudiante) VALUES( '$pos_1', '$carrera ','$pos_e')";
                $resultado_f= mysqli_query($conexion, $insertar_c);
            }
        }
        ?>
    <center><a href="http://localhost/Oficial/vista/Profesor/AgregarEst.php" type="button" class="btn btn-primary btn-1">Volver</a></center> 
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
        <center><a href="http://localhost/Oficial/vista/Profesor/AgregarEst.php" type="button" class="btn btn-primary btn-1">Volver</a></center> 
        </div>
        </div>
        <?php
    } 

}


?>