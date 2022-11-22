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
    <title>Registro de Datos</title>
</head>
<body>
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
						   <a class="navbar-brand op" aria-current="page"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Cerrar Sesion</a>
                        <a aria-current="page" href="#" style="text-decoration: none; color: rgb(24, 20, 86); border-bottom: 2px solid black;"> <?php  echo $usuario ?></a>
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
			<center><h3 style="">Formulario de Registro del estudiante</h3></center>
     <div class="agregar" style="width:75%;  background-color: white;margin: 80px 0 10px 200px; border:2px solid  black ; border-radius: 5px;">
	 <form class="row g-5 needs-validation"  action="http://localhost/Oficial/modelo/IngresarEst.php" method ="POST" enctype="multipart/form-data" novalidate style="margin: 8px 5px 5px 5px;">
	 <h5>Información Personal</h5>
	 <div class="col-md-4">

    <label for="validationCustom01" class="form-label">Nombres</label>
    <input type="text" class="form-control" id="validationCustom01" name="nombre" autofocus required>
    <div class="valid-feedback">
     Muy Bien
    </div>
  </div>
  <div class="col-md-5">
    <label for="validationCustom02" class="form-label">Apellidos</label>
    <input type="text" class="form-control" id="validationCustom02"  name="apellido" autofocus required>
    <div class="valid-feedback">
     Muy Bien
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Correo Electrónico</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" placeholder="estudiante@gmail.com" name="correo" autofocus aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Ingrese un correo electronico
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom03" class="form-label"># Identificación</label>
    <input type="number" class="form-control" id="validationCustom03" placeholder="Número de Cedula/ Pasaporte/ INE" name="cedula" autofocus required>
    <div class="invalid-feedback">
      Ingrese una Cedula 
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">Tipo de Identificación</label>
    <select class="form-select" id="validationCustom04" name="tipo_indent" autofocus required>
      <option selected  value=""></option>
      <option>Cédula</option>
	  <option>Pasaporte</option>
	  <option>INE</option>
	  <option>Otros</option>
    </select>
    <div class="invalid-feedback">
      Por favor selecciona una Identificación correcta
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Número de Contacto</label>
    <input type="number" class="form-control" id="validationCustom05" name="contacto"   required>
    <div class="invalid-feedback">
      Ingrese número telefoníco
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom03" class="form-label">Fecha de Nacimiento</label>
    <input type="date" class="form-control" id="validationCustom03" name="fecha_Nac" max="2005-01-01" autofocus required>
    <div class="invalid-feedback">
      Ingrese una fecha de Nacimiento correcta
    </div>
  </div>

  <div class="col-md-3">
    <label for="validationCustom03" class="form-label">Edad</label>
    <input type="number" class="form-control" id="validationCustom03" name="edad" placeholder="18" autofocus required>
    <div class="invalid-feedback">
      Ingrese una edad correcta
    </div>
  </div>
  
 


  <div class="col-md-3">
    <label for="validationCustom03" class="form-label">Género</label>
    <select class="form-select" id="validationCustom04" name="genero" autofocus required>
      <option selected  value=""></option>
      <option>Masculino</option>
	  <option>Femenino</option>
	  <option>Otro</option>
    <div class="invalid-feedback">
      Ingrese un Genero
    </div>
  </div>
  
  <div class="col-md-4">
    <label for="validationCustom03" class="form-label">------</label>
    <select class="form-select" id="validationCustom07" name="Pais_">
      <option selected  value=""> </option>
    <div class="invalid-feedback">
      Ingrese una edad correcta
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom03" class="form-label">Dispacidad</label>
    <select class="form-select" id="validationCustom04" name="discapacidad" autofocus required>
      <option selected  value=""> </option>
	  <option>Ninguna</option>
      <option>Visual</option>
	  <option>Auditiva</option>
	  <option>De lenguaje</option>
	  <option>Física</option>
	  <option>Intelectual</option>
	  <option>Psicosocial</option>
	  <option>Otro</option>
    <div class="invalid-feedback">
      Ingrese un Genero
    </div>
  </div>
  
  <div class="col-md-4">
    <label for="validationCustom03" class="form-label">------</label>
    <select class="form-select" id="validationCustom07" name="Pais_">
      <option selected  value=""> </option>
    <div class="invalid-feedback">
      Ingrese una edad correcta
    </div>
  </div>

  <div class="col-md-2">
    <label for="validationCustom03" class="form-label">Porcetaje de Dispacidad</label>
    <input type="number" class="form-control" id="validationCustom03" name="porcetaje" value="0" autofocus  required>
    <div class="invalid-feedback">
      Ingrese una edad correcta
    </div>
  </div>
  

  <div class="col-md-4">
  <label for="validationCustom03" class="form-label">Adjuntar Copia de Cédula:</label>
                    <input type="file"  class="form-control" name="archivo" id="archivo" autofocus required>
					<div id="emailHelp" class="form-text">Asegúrese que sea de Tipo: PDF</div>
                </div>
         
<h5>Información relacionado a la Ubicacion</h5>
<div class="col-md-3">
    <label for="validationCustom03" class="form-label">Pais de origen</label>
    <select class="form-select" id="validationCustom07" name="Pais" autofocus>
      <option selected  value=""></option>
	  <option>Ecuador</option>
      <option>Peru</option>
	  <option>Colombia</option>
	  <option>Chile</option>
	  <option>Venezuela</option>
	  <option>Argentina</option>
	  <option>Brazil</option>
	  <option>Uruguay</option>
	  <option>Paraguay</option>
	  <option>Bolivia</option>
	  <option>Otro</option>
    <div class="invalid-feedback">
      Ingrese una edad correcta
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom03" class="form-label">Provincia</label>
    <select class="form-select" id="validationCustom07" name="Pais_">
      <option selected  value=""> </option>
    <div class="invalid-feedback">
      Ingrese una edad correcta
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom03" class="form-label">Provincia</label>
    <select class="form-select" id="validationCustom07" name="provincia" autofocus required>
      <option selected  value="">No especificado</option>
	  <?php
                              $conexion= mysqli_connect("localhost", "root", "", "its");
                              $consulta_2 ="SELECT * from provincia";
                              $resultado_2 = mysqli_query($conexion, $consulta_2);

                              while($mostrar_1 =mysqli_fetch_array($resultado_2)){
                                  ?> <option > <?php  echo $mostrar_1['provincia'] ?> </option>
                                  
                                  <?php
                              }
                              ?>
    <div class="invalid-feedback">
      Ingrese una edad correcta
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom03" class="form-label">canton</label>
    <select class="form-select" id="validationCustom07" name="Pais_" >
      <option selected  value=""> </option>
    <div class="invalid-feedback">
      Ingrese una edad correcta
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom03" class="form-label">Cantón</label>
    <select class="form-select" id="validationCustom07" name="canton" autofocus required>
      <option selected  value="">No especificado</option>
	  <?php
                              $conexion= mysqli_connect("localhost", "root", "", "its");
                              $consulta_1 ="SELECT * from canton";
                              $resultado_1 = mysqli_query($conexion, $consulta_1);

                              while($mostrar_ =mysqli_fetch_array($resultado_1)){
                                  ?> <option > <?php  echo $mostrar_['canton'] ?> </option>
                                  
                                  <?php
                              }
                              ?>
    <div class="invalid-feedback">
      Escoja su canton de origen
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom03" class="form-label">Pais de origen</label>
    <select class="form-select" id="validationCustom07" name="Pais_">
      <option selected  value=""> </option>
    <div class="invalid-feedback">
      Ingrese una edad correcta
    </div>
  </div> 
  <div class="col-md-2">
    <label for="validationCustom03" class="form-label">Parroquia</label>
    <select class="form-select" id="validationCustom07" name="parroqui" autofocus required>
      <option selected  value="">No especificado</option>
	  <?php
                              $conexion= mysqli_connect("localhost", "root", "", "its");
                              $consulta ="SELECT * from tbl_parroquia";
                              $resultado = mysqli_query($conexion, $consulta);

                              while($mostrar =mysqli_fetch_array($resultado)){
                                  ?> <option > <?php  echo $mostrar['parroquia'] ?> </option>
                                  
                                  <?php
                              }
                              ?>
    <div class="invalid-feedback">
      Ingrese una edad correcta
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom03" class="form-label">------</label>
    <select class="form-select" id="validationCustom07" name="Pais_">
      <option selected  value=""> </option>
    <div class="invalid-feedback">
      Ingrese una edad correcta
    </div>
  </div>
  <h5>Información relacionado Contacto de Emergencia</h5>
  <div class="col-md-4">
<label for="validationCustom01" class="form-label">Nombres</label>
<input type="text" class="form-control" id="validationCustom01"  placeholder="Escriba nombres completos" name="nombre_e" autofocus required>
<div class="valid-feedback">
 Muy Bien
</div>
</div>
<div class="col-md-4">
<label for="validationCustom02" class="form-label">Número Telefoníco</label>
<input type="number" class="form-control" id="validationCustom02" name="telefono_e" autofocus required>
<div class="valid-feedback">
 Muy Bien
</div>
</div>
<div class="col-md-4">
<label for="validationCustom02" class="form-label">Parentesto Familiar</label>
<input type="text" class="form-control" id="validationCustom02"  name="parenteso" autofocus required>
<div class="valid-feedback">
 Muy Bien
</div>
</div>
<h5>Información relacionado a la Carrera a inscribirse</h5>

    <div class="col-md-4">
    <label for="validationCustom03" class="form-label">Escoja la Carrera:</label>
    <select class="form-select form-select-lg mb-3" id="validationCustom07" name="carrera" autofocus required>
      <option selected  value="">No especificado</option>
	  <?php
                             $conexion= mysqli_connect("localhost", "root", "", "its");
                             $consult ="SELECT * from carrera";
                             $resultad = mysqli_query($conexion, $consult);

                             while($mostra =mysqli_fetch_array($resultad)){
                                 ?> <option > <?php  echo $mostra['nombre'] ?> </option>
                                 
                                 <?php
                             }
                              ?>
    <div class="invalid-feedback">
      Ingrese una carrera correcta
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom03" class="form-label">------</label>
    <select class="form-select" id="validationCustom07" name="Pais_">
      <option selected  value=""> </option>
    <div class="invalid-feedback">
      Ingrese una edad correcta
    </div>
    </div>
    <br>
  <div class="col-12" >
         <center>
			<input style="background-color:red;" type="reset" class="btn btn-secondary"></input><span></span>
          <button type="submit" id="btnEnviarD" class="btn btn-primary">Registrar</button>
		 </center> 
  </div>
 
</form>
	 </div>

<!-- CERERRA SESION -->
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