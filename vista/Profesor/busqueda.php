<?php
session_start();
$usuario = $_SESSION['username'];
$id_est=  $_POST['id_est'];
$codigo= $_POST['codigo'];
$carrera= $_POST['carrera'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/Oficial/public/profesor.css">
    <title>Datos</title>
</head>
<body style=" background-color: rgb(18, 15, 68);">
<div class="nav" style=" background-color: wheat;">
      <a href="#"><img src="https://i.ibb.co/Ycvp5bb/ITS-logo.png" alt="ITS-logo" border="0" /></a>
        <div class="opcion">
            <nav class="navbar navbar-expand" >
                <div class="container-fluid" style="background-color: wheat;">
                    <svg class="icon-3"  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                      </svg>
                  <a class="navbar-brand op" href="http://localhost/Oficial/controlador/controlador.php?aux=3">Home</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <svg class="icon-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6.146-2.854a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z"/>
                           </svg>
                           <a class="navbar-brand op" aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Cerrar Sesion</a>
                        <a aria-current="page" href="#" style="text-decoration: none; color: rgb(24, 20, 86); border-bottom: 2px solid black;"> <?php  echo $usuario ?></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>
    </div>

    
<!-- CERRAR SESION -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Advertencia</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="http://localhost/Oficial/modelo/cerrarSesion.php" method ="POST">
      <div class="modal-body">
      ¿Esta seguro de cerrar Sesíon?
      </div>
      <div class="modal-footer">
        <button style="background-color: gray;" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button style="background-color: red;" type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >Cerrar Sesíon</button>
      </div>
      </form>
    </div>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script>const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))</script>
   
   
 </body>
</html>
<?php

//Recibo como metodo POST estos datos


//Realizaso la consulta correspodiente
$conexion= mysqli_connect("localhost", "root", "", "its");
$consulta= "SELECT * FROM carreras WHERE id_estudiante = '$id_est' and codigo= '$codigo'";
$resultado= mysqli_query($conexion, $consulta);
$filas = mysqli_fetch_array($resultado);

//Verifico si tuvo exito mi consulta

if($filas){
?>
<div class="Mostrar_Estudiante" style="margin-left: 150px; width:900px; heigth: 1500px; border: 1px solid black;  background-color: wheat;"> 
<center>
  <h2 class="title">Datos del estudiante</h2>
</center>
<?php
//Consulto los datos de los estudiantes 
  $conexion_1= mysqli_connect("localhost", "root", "", "its");
    $consulta_1= "SELECT * FROM estudiantes WHERE id= '$id_est'";
    $resultado_1= mysqli_query($conexion_1, $consulta_1);
    $filas_1 = mysqli_fetch_array($resultado_1);

//Imprimo los resultados en caso de exitir DATOS
if($filas_1){
  ?>
 <style>
      .des{
    color: rgb(24, 20, 86);
    text-decoration: none;
    font-family: 'Times New Roman', Times, serif;
    font-size: 28px;
    margin-left: 15px;
    }
     .title{
      color: black;
    font-size:32px; 
    font-family: 'Times New Roman', Times, serif;
    }
    .Mostrar{
      margin-top:60px;  
      display: flex;
      margin-left:150px;

    }
    .inf{
      width:150px;
      heigth: 100px;
      margin-left: 45px;
      text-align: center;
    }
    .descarga{
      font-size:10px;
      color: rgb(19, 244, 19);
    }
    .Tarea{
      font-size:20px;
      color: white;
    }
    .error{
      margin-bottom: 50px;
    }

    </style>
    <h4 class="title-">Nombres y Apellidos: <a class="des" >  <?php echo $filas_1['nombre'] ?> <span> <?php echo $filas_1['apellido'] ?></span> </a></h4>
    <h4 class="title-">Cedula: <a  class="des"> <?php echo $filas_1['cedula'] ?> </a></h4>
    <h4 class="title-">Correo: <a  class="des"> <?php echo $filas_1['cedula'] ?></a> </h4>
    <h4 class="title-">Contacto: <a  class="des"> <?php echo $filas_1['id'] ?> </a> </h4>

  <?php
}else{
  ?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="stylesheet" href="http://localhost/Oficial/public/style.css">  

<div class="card w-50" style="margin: 20% 30% 0 30%;  max-width: 500px;" >
<div class="card-body">
<h5 class="card-title">NOO SE PUEDE PINTAR</h5>
<p class="card-text">Codigo del Estudiante  incorrecta o Usuario no existe!. Vuelva a intentarlo</p>
<center><a href="http://localhost/Oficial/controlador/controlador.php?aux=4" type="button" class="btn btn-primary btn-1">Volver</a></center> 
</div>
</div>

<?php
  
}
?>
<div class="estado">
  <h3>Estado</h3>
  <button type="button" class="btn btn-warning">Pendiente</button>
</div>
</div>
<div class="Mostrar"> 
    <div class="inf informe">
    <h3 class="Tarea">Informe</h3>
    <?php 
    $conexion_3= mysqli_connect("localhost", "root", "", "its");
    $informe = "SELECT archivo FROM documentos WHERE id_estudiante= '$id_est' and titulo= 'Informe'";
    $resultado_2= mysqli_query($conexion_3, $informe);
    $inf = mysqli_fetch_array($resultado_2);
    $ruta_1 =  "http://localhost/Oficial/modelo/files/". $informe;
    if($inf){
      ?>
   <div style=" text-align: center;"> <img src="https://cdn-icons-png.flaticon.com/512/594/594806.png" alt="" height="100px" width="120px">
   <br> <?php echo'<a href="http://localhost/Oficial/modelo/files/'.$inf['archivo'].'" class="descarga" >Ver Documento</a></div>'?> 
   <?php
   } else{
    ?>
    <div style=" text-align: center;"> <img src="https://cdn.pixabay.com/photo/2012/04/13/00/21/button-31222_960_720.png" alt="" height="100px" width="120px">
    <br> <a style=" color: red; font-size:12px; text-decoration:none;">Pendiente</a></div>
  <?php 
  }
   ?>
    </div>
    <div class="inf asistencia">
    <h3 class="Tarea">Asistencia</h3>

    <?php 
    $conexion_4= mysqli_connect("localhost", "root", "", "its");
    $asistencia = "SELECT archivo FROM documentos WHERE id_estudiante= '$id_est' and titulo= 'Asistencia'";
    $resultado_3= mysqli_query($conexion_4, $asistencia);
    $asis = mysqli_fetch_array($resultado_3);
    if($asis){
      ?>
   <div style=" text-align: center;"> <img src="https://cdn-icons-png.flaticon.com/512/594/594806.png" alt="" height="100px" width="120px">
   <br> <?php echo'<a href="http://localhost/Oficial/modelo/files/'.$asis['archivo'].'" class="descarga" >Ver Documento</a></div>'?> 
   <?php
   } else{
    ?>
    <div style=" text-align: center;"> <img src="https://cdn.pixabay.com/photo/2012/04/13/00/21/button-31222_960_720.png" alt="" height="100px" width="120px">
    <br> <a style=" color: red; font-size:12px; text-decoration:none;">Pendiente</a></div>
  <?php 
  }
   ?>
    </div>

    <div class="inf inscripcion">
    <h3 class="Tarea">Inscripción</h3>

    <?php 
    $conexion_5= mysqli_connect("localhost", "root", "", "its");
    $inscripcion = "SELECT archivo FROM documentos WHERE id_estudiante= '$id_est' and titulo= 'Inscripción'";
    $resultado_4= mysqli_query($conexion_5, $inscripcion);
    $ins = mysqli_fetch_array($resultado_4);
    if($ins){
      ?>
   <div style=" text-align: center;"> <img src="https://cdn-icons-png.flaticon.com/512/594/594806.png" alt="" height="100px" width="120px">
   <br> <?php echo'<a href="http://localhost/Oficial/modelo/files/'.$ins['archivo'].'" class="descarga" >Ver Documento</a></div>'?> 
   <?php
   } else{
    ?>
       <div style=" text-align: center;"> <img src="https://cdn.pixabay.com/photo/2012/04/13/00/21/button-31222_960_720.png" alt="" height="100px" width="120px">
    <br> <a style=" color: red; font-size:12px; text-decoration:none;">Pendiente</a></div>
  <?php 
  }
   ?>
    </div>

    <div class="inf vinculacion">
    <h3 class="Tarea">Vinculación</h3>

    <?php 
    $conexion_6= mysqli_connect("localhost", "root", "", "its");
    $vinculacion = "SELECT archivo FROM documentos WHERE id_estudiante= '$id_est' and titulo= 'Vinculación Estudiante'";
    $resultado_6= mysqli_query($conexion_6, $vinculacion);
    $vin = mysqli_fetch_array($resultado_6);
    if($vin){
      ?>
   <div style=" text-align: center;"> <img src="https://cdn-icons-png.flaticon.com/512/594/594806.png" alt="" height="100px" width="120px">
   <br> <?php echo'<a href="http://localhost/Oficial/modelo/files/'.$vin['archivo'].'" class="descarga" >Ver Documento</a></div>'?> 
   <?php
   } else{
    ?>
      <div style=" text-align: center;"> <img src="https://cdn.pixabay.com/photo/2012/04/13/00/21/button-31222_960_720.png" alt="" height="100px" width="120px">
    <br> <a style=" color: red; font-size:12px; text-decoration:none;">Pendiente</a></div>
  <?php 
  }
   ?>
    </div>

    
    </div>
<?php

}else{  //AQUI EN CASO DE EXISTIR UN ERROR 
  ?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="stylesheet" href="http://localhost/Oficial/public/style.css">  

<div class="card w-50" style="margin: 20% 30% 0 30%;  max-width: 500px;" >
<div class="card-body">
<h5 class="card-title">ESTUDIANTE NO ENCONTRADO EN LA CARRERA</h5>
<p class="card-text">El estudiante no se encuentra registrado en la Carrera de <a href=""> <?php echo $carrera ?></a>!. Vuelva a intentarlo</p>
<center><a href="http://localhost/Oficial/controlador/controlador.php?aux=3" type="button" class="btn btn-primary btn-1">Volver</a></center> 
</div>
</div>

<?php
}


?>

