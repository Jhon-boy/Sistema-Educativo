<?php
$conexion= mysqli_connect("localhost", "root", "", "its");
$codigo=$_REQUEST['codigo'];
$sql = "SELECT * FROM  estudiantes where id= '$codigo'";
$resultado= mysqli_query($conexion, $sql);
$filas = mysqli_fetch_array($resultado);

//Imprimo los resultados en caso de exitir DATOS
if($filas){
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
                  <a class="navbar-brand op" href="http://localhost/Oficial/controlador/controlador.php?aux=3">Inicio</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                       
                           <a class="navbar-brand op" aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Cerrar Sesion</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>
    </div>
<style>
    .admin{
    display: flex;
    margin-left:20%;
    margin-top:25px;
    margin-bottom:20px;
}
    .agregar{
    color:white;
    margin-left:25px;
    margin-top:-6px;
    border: 1px solid  yellow ;
    border-radius:5px;
    width:700px;
    height:570px;
    margin-right:25px;
}
.agregar_1{
    display:flex;
}
h6{
    margin-top:10px;
    margin-bottom: 50px;

}
.form-control{
    margin-top:25px;
    margin-left:20px;
}
.textos{
    margin-left:15px;
}
.ver{
    border: 1px solid  yellow ;  
    width:1500px;
    margin-right:-250px;
}
</style>
<div class="operaciones" style="margin-left:50px;">
      <a  type="button" class="btn btn-warning"href="http://localhost/Oficial/vista/Profesor/profesor.php" >Volver</a>
      <a  type="button" class="btn btn-success"href="http://localhost/Oficial/modelo//VerEstudiante.php" >Ver Estudiantes</a>

      </div>
<div class="admin">
<div class="agregar">
 <center>
    <h5 style="color:white; margin-top:15px; ">Formulario de Asignacion de Estudiantes </h5>
 </center>
    <div class="agregar_1">
   
        <div class="textos">
    <h6 style="margin-top:30px; ">Nombres y Apellidos:</h6>
    <h6 style="margin-top:5px; ">Cedula:</h6>
    <h6 style="margin-top:5px; ">Nombre del Proyecto:</h6>
    <h6 style="margin-top:-5px; ">Horas:</h6>
    <h6 style="margin-top:-15px; ">Lugar: </h6>
    <h6 style="margin-top:-15px; ">Institución: </h6>
    <h6 style="margin-top:-15px; ">Período: </h6>
</div>
<div class="inputs">
<form class="form-signin"  action="http://localhost/Oficial/modelo/AsignarP.php" method ="POST">
<input type="text" class="form-control"  id="nombres" name="estudiante" value=" <?php echo $filas['nombre'] ?>   <?php echo $filas['apellido'] ?>" readonly>
<input type="text" class="form-control"  id="cedula" name="cedula" value="<?php echo $filas['cedula'] ?> " readonly>
<input type="text" class="form-control"  id="proyecto" name="nombreP" required autofocus>
<input type="number" class="form-control"  id="Horas" name="horas" required autofocus>
<input type="text" class="form-control"  id="lugar" name="lugar" required>
<input type="text" class="form-control"  id="institucion" name="institucion" required>
<select style="margin: 20px 0 0 18px; width:300px;" class="form-select"
                             name="periodo" id="periodo">
                                <option >Enero - Junio 2022</option>
                                <option >Julio - Diciembre 2022</option>
                                <option >Enero - Junio 2021</option>
                                <option >Julio - Diciembre 2021</option>
                                <option >Enero - Junio 2020</option>
                                <option >Julio - Diciembre 2020</option>
                                </select>
</div>

    </div>
<center>
              <input type="reset" class="btn btn-danger"></input><span></span>
          <button style="margin-left:50px;" type="submit" id="btnEnviarD" class="btn btn-warning">Registrar</button>
</center>

    </form>
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

}else
echo"ERROR AL MOSTRAR";
?>