<?php
$carrera = $_POST['carrera'];
$codigo = $_POST['codigo'];
session_start();
$usuario = $_SESSION['username'];

//Armo la Conexion
$conexion= mysqli_connect("localhost", "root", "", "its");
//Realizo la consulta con los datos enviados
 ?>
 <body style="background-color: wheat">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/Oficial//public/busqueda.css"> 

    <div class="nav">
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
                        <a class="navbar-brand op" aria-current="page" href="#">Cerrar Sesion</a>
                        <a aria-current="page" href="#" style="text-decoration: none; color: rgb(24, 20, 86); border-bottom: 2px solid black;"> <?php  echo $usuario ?></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>
    </div>
  <style>
    .title-{
    color: black;
    font-family: 'Times New Roman', Times, serif;
    font-size:25px;
}
.des{
    color: rgb(24, 20, 86);
    text-decoration: none;
    font-family: 'Times New Roman', Times, serif;
    font-size: 22px;

}
  </style>
    <div class="info">
        <div class="carrera" style="height: 100px;">
          <h3 class="nav-link active title-">Carrera: <a class="des"> <?php   echo $carrera ?></a> </h3>
        <h3 class="nav-link active title-">Código: <a class="des"><?php   echo $codigo ?>   </a> </h3>  
        </div>
       <div class="busqueda">
         <div class="search">
            <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              </svg></span>
              <form  action="http://localhost/Oficial/vista/Profesor/busqueda.php" method ="POST">  
                <select  id="carrera"  name="carrera"style="display: none;">
                          <option  > <?php   echo $carrera ?></option>
                        </select>
                        <select id="codigo" name="codigo" style="display: none;" >
                          <option  ><?php   echo $codigo ?></option>
                        </select>
              <input id="id_est" name="id_est" class="form-control me-2" type="search" placeholder="Ingrese el código del estudiante" aria-label="Search">    
         </div>
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
      </div>
    </div>
    </body>
<?php

?>