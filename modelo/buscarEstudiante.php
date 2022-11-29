<?php
$conexion= mysqli_connect("localhost", "root", "", "its");
session_start();
$usuario = $_SESSION['username'];
$ID= $_POST['ID'];
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
      <a  type="button" class="btn btn-primary"href="http://localhost/Oficial/vista/Profesor/profesor.php" >Regresar</a>
      <a  type="button" class="btn btn-success"href="http://localhost/Oficial/modelo//VerEstudiante.php" >Ver Estudiantes</a>

      </div>


    <div class="avisoA">

        <h3 class="carre">
            Información del Estudiante
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
      <th scope="col"> Asignar </th>

    </tr>
    </center>
  </thead>
  <tbody>
  <?php
$conexion= mysqli_connect("localhost", "root", "", "its");
$consulta= "SELECT * FROM estudiantes WHERE id = '$ID'";
$resultado = mysqli_query($conexion, $consulta);
if($resultado){
 while($mostrar =mysqli_fetch_array($resultado)){
    
    $id_ =  $mostrar['id'];
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
         <td ><a href="http://localhost/Oficial/modelo/EliminarEst.php ?ID=<?php echo $mostrar['id']?>"  onclick="return confirm('Estás seguro que deseas eliminar al Estudiante?');"> <svg class="borrar" xmlns="http://www.w3.org/2000/svg" style="color:red;" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg> </a> </td>

<td > <center><a href="http://localhost/Oficial/modelo/AsignarEst.php ?codigo=<?php echo $mostrar['id']?>"> <svg xmlns="http://www.w3.org/2000/svg" style="color:green;"  width="26" height="20" fill="currentColor" class="bi bi-clipboard-check-fill" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
  <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
  <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
</svg> </a> </center></td>
</tr>
    <?php
 }
}else{
    ?>
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

    </tr>
    </center>
  </thead>
  <center><h5>No se encontro ningun resultado, Vuelva a Intentarlo</h5></center>
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