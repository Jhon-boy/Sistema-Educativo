<?php
session_start();

$_cedula = $_SESSION['username'];
$conexion= mysqli_connect("localhost", "root", "", "its");

$consulta= "SELECT nombre  FROM estudiantes WHERE cedula= '$_cedula'";
$resultado= mysqli_query($conexion, $consulta);
$filas = mysqli_fetch_array($resultado);
if($filas){
    $usuario = $filas['nombre'];
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITS</title>
</head>
<body style="background-color: wheat; height: 135vh;">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/Oficial/public/busqueda.css"> 
    <link rel="stylesheet" href="http://localhost/Oficial/public/estudiante.css">
    <script src="/input.js"></script>
    
<style>
  
</style>
    <div class="nav">
      <a href="#"><img src="https://i.ibb.co/Ycvp5bb/ITS-logo.png" alt="ITS-logo" border="0" /></a>
        <div class="opcion">
            <nav class="navbar navbar-expand" >
                <div class="container-fluid" style="background-color: wheat;">
                    <svg class="icon-3"  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                      </svg>
                  <a class="navbar-brand op" href="#">Inicio</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <!-- <svg class="icon-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6.146-2.854a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z"/>
                           </svg> -->
                        <a class="navbar-brand op" aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Cerrar Sesion</a>
                        <!-- <a aria-current="page" href="#" style="text-decoration: none; color: rgb(24, 20, 86); border-bottom: 2px solid black;" > <?php  echo $usuario ?></a> -->
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>
    </div>

<!-- CONSULTA DE DATOS PARA EL ESTUDIANTE-->


    <div class="container_2" style=" height: 100%; background-color: rgb(24, 20, 86);">
      <div class="line">
      </div>
      <div class="bloque_1">
           <div class="info-est">
        <h1 class="Datos">Datos del estudiante</h1>
        <?php
$conexion_1= mysqli_connect("localhost", "root", "", "its");
$consulta_1= "SELECT * FROM estudiantes WHERE cedula= '$_cedula'";
$resultado_1= mysqli_query($conexion_1, $consulta_1);
$filas_1 = mysqli_fetch_array($resultado_1);
if($filas_1){
  $id_est = $filas_1['id'];
?>
        <h3 class="titulo_2">Nombres y Apellidos: <a  class="respuesta"><?php echo $filas_1['nombre'] ?> <span> <?php echo $filas_1['apellido'] ?></a></h3>
        <h3 class="titulo_2">Cédula: <a  class="respuesta"><?php echo $filas_1['cedula'] ?></a></h3>
        <h3 class="titulo_2">Correo: <a  class="respuesta"><?php echo $filas_1['correo'] ?></a></h3>
        <h3 class="titulo_2">Contacto: <a  class="respuesta"><?php echo $filas_1['contacto'] ?></a></h3>
      </div>
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
    </div>

    <div class="tareas">
      <div class="aviso">Agregar Archivos</div>
      <div class="bloque">
<!-- PRIMERA TAREA -->
        <div  class="agregar">
          <h6>Informe</h6>
<div class="container-input">

<?php 

    $conexion= mysqli_connect("localhost", "root", "", "its");
    $informe = "SELECT * FROM documentos WHERE id_estudiante= '$id_est' and titulo= 'Informe'";
    $resultado_1= mysqli_query($conexion, $informe);
    $in = mysqli_fetch_array($resultado_1);
    if($in){
      ?>
      <button onlyread style="border:none;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> </button>
       <img   src="https://cdn.pixabay.com/photo/2014/04/02/10/41/button-304224_960_720.png" height="100px" width="120px" alt="">
      <center>  <p style="color:rgb(34, 205, 34);">Completado</p>  </center>
      <form class="row g-5 needs-validation"  action="http://localhost/Oficial/modelo/EliminarDoc.php" method ="POST">
      <!-- <a style="margin-top: 15px; color:red;" href="http://localhost/Oficial/modelo/EliminarDoc.php? codigo=<?php echo $in['id_doc']?>"  onclick="return confirm('Estás seguro que deseas eliminar el documento Enviado?');"> Borrar </a> -->
      <select  style="display:none;" class="form-select" id="codigo" name="codigo"> 
      <option > <?php  echo $in['id_doc']?> </option>
    </select>
   <center><button type="submit" id="btnEnviarD" class="btn btn-danger">Eliminar</button></center> 
      </form>
   <?php
    } else{
      ?>

<button  style="border:none;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
 <img  src="https://cdn.pixabay.com/photo/2014/04/02/10/41/button-304224_960_720.png" height="100px" width="120px" alt="">
 <p style="color:red;">Agregar Entrega</p>
         <?php
    }
   ?>
</div>
          
        </div>

        <!-- SEGUNDA TAREA -->
        <div  class="agregar">
          <h6>Asistencia</h6>
          <div class="container-input">
            

          <?php 
    $conexion= mysqli_connect("localhost", "root", "", "its");
    $asistencia = "SELECT archivo FROM documentos WHERE id_estudiante= '$id_est' and titulo= 'Asistencia'";
    $resultadoA= mysqli_query($conexion, $asistencia);
    $Asis = mysqli_fetch_array($resultadoA);
    if($Asis){
      ?>
      <button onlyread style="border:none;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> </button>
       <img  src="https://cdn.pixabay.com/photo/2014/04/02/10/41/button-304224_960_720.png" height="100px" width="120px" alt="">
      <center>  <p style="color:rgb(34, 205, 34);">Completado</p></center>
      <form class="row g-5 needs-validation"  action="http://localhost/Oficial/modelo/EliminarDoc.php" method ="POST">
      <!-- <a style="margin-top: 15px; color:red;" href="http://localhost/Oficial/modelo/EliminarDoc.php? codigo=<?php echo $in['id_doc']?>"  onclick="return confirm('Estás seguro que deseas eliminar el documento Enviado?');"> Borrar </a> -->
      <select  style="display:none;" class="form-select" id="codigo" name="codigo"> 
      <?php
                             $consult ="SELECT * FROM documentos WHERE id_estudiante= '$id_est' and titulo= 'Asistencia'";
                             $resultad = mysqli_query($conexion, $consult);

                             while($mostra =mysqli_fetch_array($resultad)){
                                 ?> <option > <?php  echo $mostra['id_doc'] ?> </option>
                                 
                                 <?php
                             }
                             ?>
    </select>
   <center><button type="submit" id="btnEnviarD" onclick="return confirm('Estás seguro que deseas eliminar el documento Enviado?');"  class="btn btn-danger">Eliminar</button></center> 
      </form>
   <?php
    } else{
      ?>

<button style="border:none;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 <img  src="https://cdn.pixabay.com/photo/2014/04/02/10/41/button-304224_960_720.png" height="100px" width="120px" alt="">
 <p style="color:red;">Agregar Entrega</p>
         <?php
    }
   ?>

  </div>
        </div>


<!--TERCERA TAREA-->
        <div  class="agregar">
          <h6>Inscripción</h6>
                   
          <div class="container-input">
          <?php 
    $conexion= mysqli_connect("localhost", "root", "", "its");
    $inscripcion = "SELECT archivo FROM documentos WHERE id_estudiante= '$id_est' and titulo= 'Inscripción'";
    $resultado_1= mysqli_query($conexion, $inscripcion);
    $ins = mysqli_fetch_array($resultado_1);
    if($ins){
      ?>
      <button onlyread style="border:none;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> </button>
       <img  src="https://cdn.pixabay.com/photo/2014/04/02/10/41/button-304224_960_720.png" height="100px" width="120px" alt="">
      <center>  <p style="color:rgb(34, 205, 34);">Completado</p></center>
      <form class="row g-5 needs-validation"  action="http://localhost/Oficial/modelo/EliminarDoc.php" method ="POST">
      <!-- <a style="margin-top: 15px; color:red;" href="http://localhost/Oficial/modelo/EliminarDoc.php? codigo=<?php echo $in['id_doc']?>"  onclick="return confirm('Estás seguro que deseas eliminar el documento Enviado?');"> Borrar </a> -->
      <select  style="display:none;" class="form-select" id="codigo" name="codigo"> 
      <?php
                             $consult_1 ="SELECT * FROM documentos WHERE id_estudiante= '$id_est' and titulo= 'Inscripción'";
                             $resultad_1 = mysqli_query($conexion, $consult_1);

                             while($mostra_1 =mysqli_fetch_array($resultad_1)){
                                 ?> <option > <?php  echo $mostra_1['id_doc'] ?> </option>
                                 
                                 <?php
                             }
                             ?>
    </select>
   <center><button type="submit" id="btnEnviarD" onclick="return confirm('Estás seguro que deseas eliminar el documento Enviado?');"  class="btn btn-danger">Eliminar</button></center> 
      </form>
   <?php
    } else{
      ?>

<button style="border:none;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 <img  src="https://cdn.pixabay.com/photo/2014/04/02/10/41/button-304224_960_720.png" height="100px" width="120px" alt="">
 <p style="color:red;">Agregar Entrega</p>
         <?php
    }
   ?>

</div>
        </div>


        <!--CUARTA TAREA-->
 <div  class="agregar">
    <h6>Vinculación Estudiante</h6> 
    <div class="container-input">
    <?php 
    $conexion= mysqli_connect("localhost", "root", "", "its");
    $informe = "SELECT archivo FROM documentos WHERE id_estudiante= '$id_est' and titulo= 'Vinculación Estudiante'";
    $resultado_1= mysqli_query($conexion, $informe);
    $vin = mysqli_fetch_array($resultado_1);
    if($vin){
      ?>
      <button onlyread  style="border:none;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"></button>
       <img  src="https://cdn.pixabay.com/photo/2014/04/02/10/41/button-304224_960_720.png" height="100px" width="120px" alt="">
      <center>  <p style="color:rgb(34, 205, 34);">Completado</p></center>
      <form class="row g-5 needs-validation"  action="http://localhost/Oficial/modelo/EliminarDoc.php" method ="POST">
      <!-- <a style="margin-top: 15px; color:red;" href="http://localhost/Oficial/modelo/EliminarDoc.php? codigo=<?php echo $in['id_doc']?>"  onclick="return confirm('Estás seguro que deseas eliminar el documento Enviado?');"> Borrar </a> -->
      <select  style="display:none;" class="form-select" id="codigo" name="codigo"> 
      <?php
                             $consult_2 ="SELECT * FROM documentos WHERE id_estudiante= '$id_est' and titulo= 'Vinculación Estudiante'";
                             $resultad_2 = mysqli_query($conexion, $consult_2);

                             while($mostra_2 =mysqli_fetch_array($resultad_2)){
                                 ?> <option > <?php  echo $mostra_2['id_doc'] ?> </option>
                                 
                                 <?php
                             }
                             ?>
    </select>
   <center><button type="submit" id="btnEnviarD"  onclick="return confirm('Estás seguro que deseas eliminar el documento Enviado?');" class="btn btn-danger">Eliminar</button></center> 
      </form>


   <?php
    } else{
      ?>

<button style="border:none;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 <img  src="https://cdn.pixabay.com/photo/2014/04/02/10/41/button-304224_960_720.png" height="100px" width="120px" alt="">
 <p style="color:red;">Agregar Entrega</p>
         <?php
    }
   ?>


  </div></div>
  <br>

       
        
      </div>
      <div class="bloque" style="display:flex; ">
 <!--QUINTA TAREA-->
 <div  class="agregar">
    <h6>Cert. de Entidad Receptora</h6> 
    <div class="container-input">
    <?php 
    $conexion= mysqli_connect("localhost", "root", "", "its");
    $informe = "SELECT archivo FROM documentos WHERE id_estudiante= '$id_est' and titulo= 'Certificado de entidad Receptora'";
    $resultado_1= mysqli_query($conexion, $informe);
    $cer = mysqli_fetch_array($resultado_1);
    if($cer){
      ?>
      <button onlyread  style="border:none;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"></button>
       <img  src="https://cdn.pixabay.com/photo/2014/04/02/10/41/button-304224_960_720.png" height="100px" width="120px" alt="">
      <center>  <p style="color:rgb(34, 205, 34);">Completado</p></center>
      <form class="row g-5 needs-validation"  action="http://localhost/Oficial/modelo/EliminarDoc.php" method ="POST">
      <!-- <a style="margin-top: 15px; color:red;" href="http://localhost/Oficial/modelo/EliminarDoc.php? codigo=<?php echo $in['id_doc']?>"  onclick="return confirm('Estás seguro que deseas eliminar el documento Enviado?');"> Borrar </a> -->
      <select  style="display:none;" class="form-select" id="codigo" name="codigo"> 
      <?php
                             $consult_3 ="SELECT * FROM documentos WHERE id_estudiante= '$id_est' and titulo= 'Certificado de entidad Receptora'";
                             $resultad_3 = mysqli_query($conexion, $consult_3);

                             while($mostra_3 =mysqli_fetch_array($resultad_3)){
                                 ?> <option > <?php  echo $mostra_3['id_doc'] ?> </option>
                                 
                                 <?php
                             }
                             ?>
    </select>
   <center><button type="submit" id="btnEnviarD"  onclick="return confirm('Estás seguro que deseas eliminar el documento Enviado?');" class="btn btn-danger">Eliminar</button></center> 
      </form>


   <?php
    } else{
      ?>

<button style="border:none;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 <img  src="https://cdn.pixabay.com/photo/2014/04/02/10/41/button-304224_960_720.png" height="100px" width="120px" alt="">
 <p style="color:red;">Agregar Entrega</p>
         <?php
    }
   ?>


  </div></div>

        <!--SEPTIMA TAREA-->
  <div  class="agregar">
    <h6>Certificado del Tutor</h6> <br>
    <div class="container-input">
    <?php 
    $conexion= mysqli_connect("localhost", "root", "", "its");
    $informe = "SELECT archivo FROM documentos WHERE id_estudiante= '$id_est' and titulo= 'Certificado del Tutor'";
    $resultado_1= mysqli_query($conexion, $informe);
    $tut = mysqli_fetch_array($resultado_1);
    if($tut){
      ?>
      <button onlyread  style="border:none;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"></button>
       <img  src="https://cdn.pixabay.com/photo/2014/04/02/10/41/button-304224_960_720.png" height="100px" width="120px" alt="">
      <center>  <p style="color:rgb(34, 205, 34);">Completado</p></center>
      <form class="row g-5 needs-validation"  action="http://localhost/Oficial/modelo/EliminarDoc.php" method ="POST">
      <!-- <a style="margin-top: 15px; color:red;" href="http://localhost/Oficial/modelo/EliminarDoc.php? codigo=<?php echo $in['id_doc']?>"  onclick="return confirm('Estás seguro que deseas eliminar el documento Enviado?');"> Borrar </a> -->
      <select  style="display:none;" class="form-select" id="codigo" name="codigo"> 
      <?php
                             $consult_4 ="SELECT * FROM documentos WHERE id_estudiante= '$id_est' and titulo= 'Certificado del Tutor'";
                             $resultad_4 = mysqli_query($conexion, $consult_4);

                             while($mostra_4 =mysqli_fetch_array($resultad_4)){
                                 ?> <option > <?php  echo $mostra_4['id_doc'] ?> </option>
                                 
                                 <?php
                             }
                             ?>
    </select>
   <center><button type="submit" id="btnEnviarD"  onclick="return confirm('Estás seguro que deseas eliminar el documento Enviado?');" class="btn btn-danger">Eliminar</button></center> 
      </form>


   <?php
    } else{
      ?>

<button style="border:none;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 <img  src="https://cdn.pixabay.com/photo/2014/04/02/10/41/button-304224_960_720.png" height="100px" width="120px" alt="">
 <p style="color:red;">Agregar Entrega</p>
         <?php
    }
   ?>


  </div></div>

  <!--SEXTA TAREA-->
  <div  class="agregar">
    <h6>Certificado de Coordinación</h6> 
    <div class="container-input">
    <?php 
    $conexion= mysqli_connect("localhost", "root", "", "its");
    $informe = "SELECT archivo FROM documentos WHERE id_estudiante= '$id_est' and titulo= 'Certificado de Coordinación'";
    $resultado_1= mysqli_query($conexion, $informe);
    $cor = mysqli_fetch_array($resultado_1);
    if($cor){
      ?>
      <button  style="border:none;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"></button>
       <img  src="https://cdn.pixabay.com/photo/2014/04/02/10/41/button-304224_960_720.png" height="100px" width="120px" alt="">
      <center>  <p style="color:rgb(34, 205, 34);">Completado</p></center>
      <form class="row g-5 needs-validation"  action="http://localhost/Oficial/modelo/EliminarDoc.php" method ="POST">
      <!-- <a style="margin-top: 15px; color:red;" href="http://localhost/Oficial/modelo/EliminarDoc.php? codigo=<?php echo $in['id_doc']?>"  onclick="return confirm('Estás seguro que deseas eliminar el documento Enviado?');"> Borrar </a> -->
      <select  style="display:none;" class="form-select" id="codigo" name="codigo"> 
      <?php
                             $consult_5 ="SELECT * FROM documentos WHERE id_estudiante= '$id_est' and titulo= 'Certificado de Coordinación'";
                             $resultad_5 = mysqli_query($conexion, $consult_5);

                             while($mostra_5 =mysqli_fetch_array($resultad_5)){
                                 ?> <option > <?php  echo $mostra_5['id_doc'] ?> </option>
                                 
                                 <?php
                             }
                             ?>
    </select>
   <center><button type="submit" id="btnEnviarD"  onclick="return confirm('Estás seguro que deseas eliminar el documento Enviado?');" class="btn btn-danger">Eliminar</button></center> 
      </form>

   <?php
    } else{
      ?>

<button style="border:none;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 <img  src="https://cdn.pixabay.com/photo/2014/04/02/10/41/button-304224_960_720.png" height="100px" width="120px" alt="">
 <p style="color:red;">Agregar Entrega</p>
         <?php
    }
   ?>


  </div></div>

  </div>
    </div>

<!-- MODAAAL  -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ingrese los Datos</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <!------------------------------------ ENVIO DE DATOS >  --------------------------------- -->

          <form  class="Doc" action="http://localhost/Oficial/modelo/Enviar.php" method ="POST" enctype="multipart/form-data">
          <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="descripcion" class="col-form-label">Descripcion:</label>
                </div>
                <div class="col-auto">
                    <input style="margin-left: 10px; width:300px;"  name="descripcion" id="descripcion" class="form-control">
                </div>
                </div>
                <div class="subida" style="display:flex; margin-top:11px;">
                            <label  for="">Tipo de Documento: </label> 
                             <select style="margin-left: 10px; width:300px;" class="form-select"
                             name="titulo" id="titulo">
                                <option >Informe</option>
                                <option >Asistencia</option>
                                <option >Inscripción</option>
                                <option >Certificado de entidad Receptora</option>
                                <option >Vinculación Estudiante</option>
                                <option >Certificado del Tutor</option>
                                <option >Certificado de Coordinación</option>
                                </select>
                </div>
                <div class="subida" style="display:flex; margin-top:11px;">
                    <label for="descripcion" class="col-form-label" value="<?php echo date("m/d/Y");?>">Fecha:</label>
                    <input style="margin-left: 62px; width:300px;"  name="fecha" id="fecha" class="form-control" type="date">
                </div>
                <div class="subida" style="display:flex; margin-top:11px;">
                <label for="">Adjuntar PDF: </label>
                    <input type="file"  class="form-control" name="archivo" id="archivo" style="margin-left: 10px; width:300px;">
                </div>
                <select id="id_" name="id_" style="display: none;" >
                          <option  ><?php echo $filas_1['id'] ?></option>
                        </select>
      <!------------------------------------ ENVIO DE DATOS >  --------------------------------- -->
      <div class="modal-footer">
          <button style="background-color:red;" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" id="btnEnviarD" class="btn btn-primary">Enviar</button>
        </div>
      </form>
    </div>
      </div>
    </div>
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
        <button style="background-color: red;" type="submit" class="btn btn-primary" >Cerrar Sesíon</button>
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