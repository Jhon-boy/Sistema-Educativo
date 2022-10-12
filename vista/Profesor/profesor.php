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
                        <svg class="icon-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6.146-2.854a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z"/>
                           </svg>
                        <a class="navbar-brand op" aria-current="page"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Cerrar Sesion</a>
                        <a aria-current="page" href="#" style="text-decoration: none; color: rgb(24, 20, 86); border-bottom: 2px solid black;"> <?php  echo $usuario ?></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>
    </div>
    <div class="container">
        <div class="presentacion">
            <div class="row row-cols-1 row-cols-md-3 g-4">
            <form class="carrera" action="http://localhost/Oficial/modelo/busqueda.php" method ="POST">
              <!-- PRIMERA CARRERA  GOT = GESTION DE OPERACIONES TURISTICA -->
                <div class="col">
                  <div class="card h-100">
                    <a href="#"><img class="card-img-top" alt="..." style="height: 100px;   width:100px;" src="https://i.ibb.co/p0krstn/Gestion.png" alt="Gestion" border="0" /></a>
                    <div class="card-body"> 
                        <select name="codigo" id="codigo"  name="carrera"style="display: none;">
                          <option  >GOT</option>
                        </select>
                        <select id="carrera" name="carrera"style="display: none;" >
                          <option  >Tecnología Superior en  Gestíon de Operaciones Turísticas</option>
                        </select>
                        <button href=""class="btn-enviar title" type="submit" id="btnbuscar" >Tecnología Superior en <br> Gestíon de Operaciones Turísticas</button>
                        
                    </div>
                  </div>
                </div>
                </form>
                <!-- SEGUNDA CARRERA  DDS = Desarrollo de Software-->
                <form  class="carrera" action="http://localhost/Oficial/modelo/busqueda.php" method ="POST">
                    <div class="col">
                      <div class="card h-100">
                        <a href="#"><img  class="card-img-top" alt="..." style="height: 100px;   width:100px;" src="https://i.ibb.co/cNN3Kwd/Programacion.png" alt="Programacion" border="0" /></a>
                        <div class="card-body">
                        <select name="codigo" id="codigo"  name="carrera"style="display: none;">
                          <option  >DDS</option>
                        </select>
                        <select id="carrera" name="carrera"style="display: none;" >
                          <option  >Tecnología Superior en  Desarrollo de Software</option>
                        </select>
                            <button href=""class="btn-enviar title"  type="submit" id="btnbuscar">Tecnología Superior en <br> Desarrollo de Software</button>
                        </div>
                      </div>
                    </div>
              </form>
                
              <!--  TERCERA CARRERA ET: ESTIMULACION TEMPRANA -->
              <form  class="carrera" action="http://localhost/Oficial/modelo/busqueda.php" method ="POST">
                  <div class="col">
                    <div class="card h-100">
                      <a href="#"><img  class="card-img-top" alt="..." style="height: 100px;   width:100px;" src="https://i.ibb.co/GCnnTqW/Estimulacion.png" alt="Estimulacion" border="0" /></a>
                      <div class="card-body">
                      <select name="codigo" id="codigo"  name="carrera"style="display: none;">
                          <option  >ET</option>
                        </select>
                        <select id="carrera" name="carrera"style="display: none;" >
                          <option  >Tecnología Superior en   Estimulación Temprana</option>
                        </select>
                          <button  class="btn-enviar title"  type="submit" id="btnbuscar">Tecnología Superior en <br> Estimulación Temprana</button>
                          <h6  id="codigo" name="codigo"  style="display: none;">ET</h6>
                      </div>
                    </div>
                  </div>
                  </form>

                      <!--  CUARTA CARRERA CONST: CONSTRUCCION -->
                      <form  class="carrera" action="http://localhost/Oficial/modelo/busqueda.php" method ="POST">
                  <div class="col">
                    <div class="card h-100">
                      <a href="#"><img class="card-img-top" alt="..." style="height: 100px;   width:100px;" src="https://i.ibb.co/BVrQvWY/Construccion.png" alt="Construccion" border="0" /></a>
                      <div class="card-body">
                      <select name="codigo" id="codigo"  name="carrera"style="display: none;">
                          <option  >CONST</option>
                        </select>
                        <select id="carrera" name="carrera"style="display: none;" >
                          <option  >Tecnología Superior en Construcción</option>
                        </select>
                          <button href=""class="btn-enviar title" type="submit" id="btnbuscar">Tecnología Superior en <br> Construcción</button>
                          <h6  id="codigo" name="codigo"  style="display: none;">CONST</h6>
                      </div>
                    </div>
                  </div>
                  </form>

                      <!--  QUINTA CARRERA RF: REGENCIA EN FARMACIA -->

                      <form  class="carrera" action="http://localhost/Oficial/modelo/busqueda.php" method ="POST">
                  <div class="col">
                    <div class="card h-100">
                      <a href="#"><img class="card-img-top" alt="..." style="height: 100px;   width:100px;" src="https://i.ibb.co/72FwyhK/Farmacia.png" alt="Farmacia" border="0" /></a>
                      <div class="card-body">
                      <select name="codigo" id="codigo"  name="carrera"style="display: none;">
                          <option  >RF</option>
                        </select>
                        <select id="carrera" name="carrera"style="display: none;" >
                          <option  >Tecnología Superior en  Regencia en Farmacia</option>
                        </select>
                          <button class="btn-enviar title"name="carrera" type="submit" id="btnbuscar" >Tecnología Superior en <br> Regencia en Farmacia</button>
                          <h6  id="codigo" name="codigo"  style="display: none;">RF</h6>
                      </div>
                    </div>
                  </div>
              </form>

               <!--  SEXTA CARRERA SAS: Servícios Asistenciales de Salud -->
               <form  class="carrera" action="http://localhost/Oficial/modelo/busqueda.php" method ="POST">
                  <div class="col">
                    <div class="card h-100">
                      <a href="#"><img class="card-img-top" alt="..." style="height: 100px;   width:100px;" src="https://i.ibb.co/TYqHxCC/Salud.png" alt="Salud" border="0" /></a>
                      <div class="card-body">
                      <select name="codigo" id="codigo"  name="carrera"style="display: none;">
                          <option  >SAS</option>
                        </select>
                        <select id="carrera" name="carrera"style="display: none;" >
                          <option  >Tecnología Superior en  Servícios Asistenciales de Salud</option>
                        </select>
                          <button class="btn-enviar title"  type="submit" id="btnbuscar">Tecnología Superior en <br> Servícios Asistenciales de Salud</button>
                      </div>
                    </div>
                  </div>
                  </form>

              <!--  SEPTIMA CARRERA RFI: Rehabilitación Física-->
              <form  class="carrera" action="http://localhost/Oficial/modelo/busqueda.php" method ="POST">
                  <div class="col">
                    <div class="card h-100">
                      <a href="#"><img class="card-img-top" alt="..." style="height: 100px;   width:100px;" src="https://i.ibb.co/mFJ98z5/Rehabilitacion.png" alt="Rehabilitacion" border="0" /></a>
                      <div class="card-body">
                      <select name="codigo" id="codigo"  name="carrera"style="display: none;">
                          <option  >RFI</option>
                        </select>
                        <select id="carrera" name="carrera"style="display: none;" >
                          <option  >Tecnología Superior en  Rehabilitación Física</option>
                        </select>
                          <button class="btn-enviar title" type="submit" id="btnbuscar">Tecnología Superior en <br> Rehabilitación Física</button>
                      </div>
                    </div>
                  </div>
                  </form>

                <!--  OCTAVA CARRERA SCYOP: Seguridad Cuidadana y Orden Público-->
                 <form  class="carrera" action="http://localhost/Oficial/modelo/busqueda.php" method ="POST">    
                  <div class="col">
                    <div class="card h-100">
                      <a href="#"><img  class="card-img-top" alt="..." style="height: 100px;   width:100px;" src="https://i.ibb.co/GV26LPn/Seguridad.png" alt="Seguridad" border="0" /></a>
                      <div class="card-body">
                      <select name="codigo" id="codigo"  name="carrera"style="display: none;">
                          <option  >SCYOP</option>
                        </select>
                        <select id="carrera" name="carrera"style="display: none;" >
                          <option  >Tecnología Superior en  Seguridad Cuidadana y Orden Público</option>
                        </select>
                          <button class="btn-enviar title" type="submit" id="btnbuscar" >Tecnología Superior en <br> Seguridad Cuidadana y Orden Público</button>
                      </div>
                    </div>
                  </div>
                 </form>
                   <!--  NOVENA CARRERA APDLS: Seguridad Cuidadana y Orden Público-->
                 <form  class="carrera" action="http://localhost/Oficial/modelo/busqueda.php" method ="POST">  
                  <div class="col">
                    <div class="card h-100">
                      <a href="#"><img class="card-img-top" alt="..." style="height: 100px;   width:100px;" src="https://i.ibb.co/kS9bCNS/medicina.png" alt="medicina" border="0" /></a>
                      <div class="card-body">
                      <select name="codigo" id="codigo"  name="carrera"style="display: none;">
                          <option  >APDLS</option>
                        </select>
                        <select id="carrera" name="carrera"style="display: none;" >
                          <option  >Tecnología Superior en Atención Primaria de la Salud</option>
                        </select>
                          <button class="btn-enviar title" type="submit" id="btnbuscar" >Tecnología Superior en <br> Atención Primaria de la Salud</button>
                      </div>
                    </div>
                  </div>
                  </form>

                 <!-- DECIMA CARRERA IYM: Informática y Multimedia-->
                 <form  class="carrera" action="http://localhost/Oficial/modelo/busqueda.php" method ="POST"> 
                  <div class="col">
                    <div class="card h-100">
                      <a href="#"><img class="card-img-top" alt="..." style="height: 100px;   width:100px;" src="https://i.ibb.co/QfdNR4Y/Informatica.png" alt="Informatica" border="0" /></a>
                      <div class="card-body">
                      <select name="codigo" id="codigo"  name="carrera"style="display: none;">
                          <option  >IYM</option>
                        </select>
                        <select id="carrera" name="carrera"style="display: none;" >
                          <option  >Tecnología Superior en   Informática y Multimedia</option>
                        </select>
                          <button class="btn-enviar title"type="submit" id="btnbuscar">Tecnología Superior en <br> Informática y Multimedia</button>
                      </div>
                    </div>
                  </div>
                  </form>

              </div>
              <div class="line">
                <h1> </h1>
              </div>
        </div>
        <!-- -------------------------------- DESCARGAR DOCUMENTOS------------------------- -->
        <div class="opciones">
            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-cloud-download-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 0a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 4.095 0 5.555 0 7.318 0 9.366 1.708 11 3.781 11H7.5V5.5a.5.5 0 0 1 1 0V11h4.188C14.502 11 16 9.57 16 7.773c0-1.636-1.242-2.969-2.834-3.194C12.923 1.999 10.69 0 8 0zm-.354 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V11h-1v3.293l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
               </svg> 
               <a href="http://localhost/Oficial/vista/Profesor/descargar.php" type="button" class="btn btn-success">Descargar Documentos</a>
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