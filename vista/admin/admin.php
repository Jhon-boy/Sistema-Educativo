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
                  <a class="navbar-brand op" href="#">Home</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="navbar-brand op" aria-current="page"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Cerrar Sesion</a>
                        <a aria-current="page" href="#" style="text-decoration: none; color: rgb(24, 20, 86); border-bottom: 2px solid black;"> <?php  echo $usuario ?></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>
    </div>
    <div class="avisoA">

        <h3 class="h">Panel  de Administrador</h3>
    </div>
    <div class="carrerasC">
    <button type="button" class="btn btn-primary"data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar Carrera</button> 
    <a href="http://localhost/Oficial/modelo/AdminDocentes.php" type="button" class="btn btn-info">Administrar Docentes</a>
    <button type="button" class="btn btn-info"data-bs-toggle="modal" data-bs-target="#exampleModal1">Asignar/Actualizar Docentes</button>
        <h3 class="carre">
            Información de las Carreras Registrada
        </h3>
    </div>
    <div class="container">
    <table class="table table-light table-hover table-bordered border border-dark ">
  <thead>
    <tr>
    <center><th scope="col">ID</th></center> 
    <center><th scope="col">Código</th></center> 
    <center><th scope="col">Carrera</th></center>   
    <th scope="col">  <center>Descripción</center></th>
      <th scope="col">Semestres</th>
      <th scope="col">Modalidad</th>
      <th scope="col">Perfil</th>
      <th scope="col"> Docente </th>
      <th scope="col"> - </th>

    </tr>
    </center>
  </thead>
  <tbody>
  <?php
$conexion= mysqli_connect("localhost", "root", "", "its");
$sql ="SELECT * from carrera";
$resultado = mysqli_query($conexion, $sql);

 while($mostrar =mysqli_fetch_array($resultado)){
     ?>
     <tr>
         <td scope="row"> <?php  echo $mostrar['id_c'] ?> </td>
         <td > <?php  echo $mostrar['codigo'] ?> </td>
         <td > <?php  echo $mostrar['nombre'] ?> </td>
         <td > <?php  echo $mostrar['descripcion'] ?> </td>
         <td > <?php  echo $mostrar['semestres'] ?> </td>
         <td > <?php  echo $mostrar['modalidad'] ?> </td>
         <td > <?php  echo '<img  style="height: 40px;   width:40px;" src="http://localhost/Oficial/modelo/'.$mostrar['foto'].'" alt=""> ' ?> </td> 
         <td >  <?php  echo $mostrar['docente'] ?>  </td>    
         <td ><a href="http://localhost/Oficial/modelo/EliminarC.php ?codigo=<?php echo $mostrar['codigo']?>"  onclick="return confirm('Estás seguro que deseas eliminar el Carrera?');"> <svg class="borrar" xmlns="http://www.w3.org/2000/svg" style="color:red;" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg> </a> </td>
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
<!-- --------------------------------------- modal de envio  -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ingrese los Datos de la Carrera</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <!------------------------------------ ENVIO DE DATOS >  --------------------------------- -->

          <form  class="Doc" action="http://localhost/Oficial/modelo/IngresarCarrera.php" method ="POST" enctype="multipart/form-data">
          <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="descripcion" class="col-form-label">Nombre:</label>
                </div>
                <div class="col-auto">
                    <input style="margin-left: 47px; width:295px;"  name="nombre" id="nombre" class="form-control" required autofocus>
                </div>
                </div>

                <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="descripcion" class="col-form-label">Descripcion:</label>
                </div>
                <div class="col-auto">
                    <input style="margin-left: 25px; width:297px;"  name="descripcion" id="descripcion" class="form-control" required autofocus>
                </div>
                </div>

                <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="descripcion" class="col-form-label">Codigo:</label>
                </div>
                <div class="col-auto">
                    <input style="margin-left: 53px; width:297px;"  name="codigo" id="codigo" class="form-control" required autofocus>
                </div>
                <div id="emailHelp" class="form-text">El código debe ser formada por las primeras letras de cada Palabra</div>
                </div>
  
                <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="descripcion" class="col-form-label">Semestres:</label>
                </div>
                <div class="col-auto">
                    <input style="margin-left: 35px; width:300px;"  type="number" name="semestres" id="semestres" class="form-control" required autofocus>
                </div>
                </div>


                <div class="subida" style="display:flex; margin-top:11px;">
                            <label  for="">Tipo de Carrera: </label> 
                             <select style="margin-left: 10px; width:300px;" class="form-select"
                             name="modalidad" id="modalidad">
                                <option >Presencial</option>
                                <option >Virtual</option>
                                <option >Mixta</option>
                                </select>
                </div>

                <div class="subida" style="display:flex; margin-top:11px;">
                <label for="">Adjuntar FOTO: </label>
                    <input type="file"  class="form-control" name="archivo" id="archivo" style="margin-left: 10px; width:300px;">

                </div>
                <div id="emailHelp" class="form-text">Asegúrese que sea de Tipo: PNG, JPG, SVG</div>
                
      <!------------------------------------ ENVIO DE DATOS >  --------------------------------- -->
      <div class="modal-footer">
          <button style="background-color:red;" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" id="btnEnviarD" class="btn btn-primary">Registrar</button>
        </div>
      </form>
    </div>
      </div>
    </div>
  </div>

  <!--  ------------------------------ASIGNAR DOCENTES ------------------>
  <!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Asignación de Docentes a Carreras</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form  class="Doc" action="http://localhost/Oficial/modelo/AsignarD.php" method ="POST">
        <div class="subida" style="display:flex; margin-top:11px;">
                            <label  for="">Docente: </label> 
                             <select style="margin-left: 10px; width:300px;" class="form-select"
                             name="docente" id="docente">
                             <option >  </option>
                             <?php
                              $conexion= mysqli_connect("localhost", "root", "", "its");
                              $consulta ="SELECT * from profesores";
                              $resultado_1 = mysqli_query($conexion, $consulta);

                              while($mostrar_ =mysqli_fetch_array($resultado_1)){
                                  ?> <option > <?php  echo $mostrar_['nombre'] ?> <span></span>
                                  <?php  echo $mostrar_['apellido'] ?>  </option>
                                  
                                  <?php
                              }
                              ?>

                                </select>
                </div>
                <div class="subida" style="display:flex; margin-top:11px;">
                            <label  for="">Carrera: </label> 
                             <select style="margin-left: 10px; width:300px;" class="form-select"
                             name="carreraa" id="carreraa">
                             <option >  </option>
                             <?php
                              $conexion= mysqli_connect("localhost", "root", "", "its");
                              $consulta_2 ="SELECT * from carrera";
                              $resultado_2 = mysqli_query($conexion, $consulta_2);

                              while($mostrar_1 =mysqli_fetch_array($resultado_2)){
                                  ?> <option > <?php  echo $mostrar_1['nombre'] ?> </option>
                                  
                                  <?php
                              }
                              ?>

                                </select>
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" id="btnEnviarD" class="btn btn-primary">Guardar Cambios</button>
      </div>
      </form>
    </div>
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