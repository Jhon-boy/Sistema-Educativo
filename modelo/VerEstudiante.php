<?php
session_start();
$usuario = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/Oficial//public/profesor.css">
    <title>Inicio</title>
</head>
<body>
  <style>
    .btn-enviar{
    background-color: wheat;
    border:none;
    color:rgb(24, 20, 86);

}
.btn-enviar:hover{
  color: blue;
}
.avisoA{
    margin-left: 40%;
    margin-top:20px;
}
.h{
        font-size: 45px;
         color: rgb(24, 20, 86);
    }
.carrerasC{
    margin-left: 6%;
    margin-top: 10px;
    margin-bottom: 30px;
}
.carre{
        font-size: 15px;
         color: rgb(24, 20, 86);
         margin-top: 30px;
         text-decoration:underline;

}
input{
    margin-top: 5px;
}
.borrar{
    cursor: pointer;
}
.op{
    cursor: pointer;   
}
  </style>
    <div class="nav">
      <a href="#"><img src="https://i.ibb.co/Ycvp5bb/ITS-logo.png" alt="ITS-logo" border="0" /></a>
        <div class="opcion">
            <nav class="navbar navbar-expand" >
                <div class="container-fluid" style="background-color: wheat;">
                    <svg class="icon-3"  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                      </svg>
                  <a class="navbar-brand op" href="http://localhost/Oficial/vista/Profesor/profesor.php">Inicio</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="navbar-brand op" aria-current="page"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Cerrar Sesion</a>
                        <!-- <a aria-current="page" href="#" style="text-decoration: none; color: rgb(24, 20, 86); border-bottom: 2px solid black;"> <?php  echo $usuario ?></a> -->
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>
    </div>
    <div class="operaciones" style="margin-left:50px;">
      <a  type="button" class="btn btn-primary"href="http://localhost/Oficial/vista/Profesor/AgregarEst.php" >Agregar Estudiantes</a>
      <a  type="button" class="btn btn-success"href="http://localhost/Oficial/modelo//VerEstudiante.php" >Ver Estudiantes</a>

      </div>
    <center>
      <div class="busqueda" style="width:500px;">
<form action="http://localhost/Oficial/modelo/buscarEstudiante.php" method ="POST"  class="d-flex" role="search">
        <input class="form-control me-2" type="search" name="ID" placeholder="Ingrese ID del Estudiante" aria-label="Search" required>
        <button class="btn btn-outline-primary" type="submit">Buscar</button>
      </form>
</div>
    </center>


    <div class="avisoA">

        <h3 class="carre">
            Información de los estudiantes Registrados
        </h3>
    </div>
    <div class="container">
    <table class="table table-light table-hover table-bordered border border-dark ">
  <thead>
    <tr>
    <th scope="col">ID</th>
    <th scope="col">Cedula</th>
    <th scope="col"><center>Nombres</center> </th> 
    <th scope="col"><center> Correo</center></th>  
    <th scope="col">  <center>Edad</center></th>
      <th scope="col">Genero</th>
      <th scope="col">Dispacidad</th>
      <th scope="col">Contacto</th>
      <th scope="col"> <center>Contacto de Emergencia</center> </th>
     <th scope="col"> <center>Carrera</center> </th>
      <th scope="col"> - </th>
      <th scope="col"> <center>Asignar</center> </th>

    </tr>
    </center>
  </thead>
  <tbody>
  <?php
$conexion= mysqli_connect("localhost", "root", "", "its");
$sql ="SELECT * from estudiantes  ORDER BY `id` ASC";
$resultado = mysqli_query($conexion, $sql);

 while($mostrar =mysqli_fetch_array($resultado)){
    
    $id_ =  $mostrar['id'];
    $cedula =  $mostrar['cedula'];
     ?>
     <tr>
         <td scope="row"> <?php  echo $mostrar['id'] ?> </td>
         <td > <?php  echo $mostrar['cedula'] ?> </td>
         <td > <?php  echo $mostrar['nombre'] ?> <span> <?php  echo $mostrar['apellido'] ?></span> </td>
         <td > <?php  echo $mostrar['correo'] ?> </td>
         <td > <?php  echo $mostrar['edad'] ?> </td>
         <td > <?php  echo $mostrar['genero'] ?> </td>
         <td > <?php  echo $mostrar['discapacidad'] ?> </td>
         <td > <?php  echo $mostrar['contacto'] ?> </td>
         <td > <?php  echo $mostrar['telefono_e'] ?> </td>
         <td > <?php  
         $consult = "SELECT * from carreras WHERE id_estudiante = '$id_'" ;
         $resultad = mysqli_query($conexion, $consult);
         while($mostra =mysqli_fetch_array($resultad)){
            echo $mostra['nombre'];
         }
         
         ?> </td>   
         <td ><a href="http://localhost/Oficial/modelo/EliminarEst.php ?codigo=<?php echo $mostrar['id']?>"  onclick="return confirm('Estás seguro que deseas eliminar al Estudiante?');"> <svg class="borrar" xmlns="http://www.w3.org/2000/svg" style="color:red;" width="26" height="20" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg> </a>  
</td>


<td > <center><?php 
    $informe = "SELECT id FROM practicas WHERE cedula= '$cedula'";
    $resultado_2= mysqli_query($conexion, $informe);
    $inf = mysqli_fetch_array($resultado_2);
    if($inf){
      ?>
   <center><h6 style="color: green;">Asignado</h6>
   <a href="http://localhost/Oficial/modelo/InfoProyectos.php ?codigo=<?php echo $mostrar['cedula']?>"><svg xmlns="http://www.w3.org/2000/svg" style="color:green;"  width="26" height="26" fill="currentColor" class="bi bi-journal-check" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
</svg></a>  </center>

   <?php
   } else{
    ?>
     <center><a href="http://localhost/Oficial/modelo/AsignarEst.php ?codigo=<?php echo $mostrar['id']?>"> <svg xmlns="http://www.w3.org/2000/svg" style="color:green;"  width="26" height="26" fill="currentColor" class="bi bi-database-add" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Z"/>
  <path d="M12.096 6.223A4.92 4.92 0 0 0 13 5.698V7c0 .289-.213.654-.753 1.007a4.493 4.493 0 0 1 1.753.25V4c0-1.007-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1s-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4v9c0 1.007.875 1.755 1.904 2.223C4.978 15.71 6.427 16 8 16c.536 0 1.058-.034 1.555-.097a4.525 4.525 0 0 1-.813-.927C8.5 14.992 8.252 15 8 15c-1.464 0-2.766-.27-3.682-.687C3.356 13.875 3 13.373 3 13v-1.302c.271.202.58.378.904.525C4.978 12.71 6.427 13 8 13h.027a4.552 4.552 0 0 1 0-1H8c-1.464 0-2.766-.27-3.682-.687C3.356 10.875 3 10.373 3 10V8.698c.271.202.58.378.904.525C4.978 9.71 6.427 10 8 10c.262 0 .52-.008.774-.024a4.525 4.525 0 0 1 1.102-1.132C9.298 8.944 8.666 9 8 9c-1.464 0-2.766-.27-3.682-.687C3.356 7.875 3 7.373 3 7V5.698c.271.202.58.378.904.525C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777ZM3 4c0-.374.356-.875 1.318-1.313C5.234 2.271 6.536 2 8 2s2.766.27 3.682.687C12.644 3.125 13 3.627 13 4c0 .374-.356.875-1.318 1.313C10.766 5.729 9.464 6 8 6s-2.766-.27-3.682-.687C3.356 4.875 3 4.373 3 4Z"/>
</svg> </a> </center>
  <?php 
  }
  ?></center></td>


</tr>
    <?php
 }
 ?>
    
  </tbody>
</table>
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


    <!-- ------------------------------ -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script>const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))</script>
   
   

</body>
</html>